<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Contents;

use ApiClients\Client\Github\CommandBus\Command\Repository\Contents\FileUploadCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Contents\FileUploadHandler;
use ApiClients\Client\Github\Resource\Contents\FileOperationInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Response;
use function React\Promise\Stream\buffer;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class FileUploadHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            function () {
                $body = 'foo.bar';
                $commitMessage = 'Commit Message';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(0.5, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new FileUploadCommand(
                    'php-api-clients/github',
                    $commitMessage,
                    '/repos/php-api-clients/github/contents/dir/file.pane',
                    'sha',
                    '',
                    $stream
                );
                $expectedJson = [
                    'message' => $commitMessage,
                    'content' => \base64_encode($body),
                    'sha' => 'sha',
                ];

                return [$loop, $request, $expectedJson];
            },
        ];

        yield [
            function () {
                $body = 'foo.bar';
                $commitMessage = 'Commit Message';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(0.5, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new FileUploadCommand(
                    'php-api-clients/github',
                    $commitMessage,
                    '/repos/php-api-clients/github/contents/dir/file.pane',
                    'sha',
                    'master',
                    $stream
                );
                $expectedJson = [
                    'message' => $commitMessage,
                    'content' => \base64_encode($body),
                    'sha' => 'sha',
                    'branch' => 'master',
                ];

                return [$loop, $request, $expectedJson];
            },
        ];

        yield [
            function () {
                $body = 'foo.bar';
                $commitMessage = 'Commit Message';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(0.5, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new FileUploadCommand(
                    'php-api-clients/github',
                    $commitMessage,
                    '/repos/php-api-clients/github/contents/dir/file.pane',
                    '',
                    'new-pr',
                    $stream
                );
                $expectedJson = [
                    'message' => $commitMessage,
                    'content' => \base64_encode($body),
                    'branch' => 'new-pr',
                ];

                return [$loop, $request, $expectedJson];
            },
        ];
    }

    /**
     * @dataProvider provideCommands
     */
    public function testCommand(callable $callable)
    {
        list($loop, $command, $expectedjson) = $callable();
        $resource = $this->prophesize(FileOperationInterface::class)->reveal();
        $stream = null;

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(Argument::that(function (RequestInterface $request) use (&$stream) {
            buffer($request->getBody())->done(function ($json) use (&$stream) {
                $stream = $json;
            });

            return true;
        }))->willReturn(timedPromise($loop, 1, new Response(
            200,
            [],
            new JsonStream([])
        )));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(FileOperationInterface::HYDRATE_CLASS, [])->shouldBeCalled()->willReturn($resource);

        $handler = new FileUploadHandler($requestService->reveal(), $hydrator->reveal(), $loop);

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($resource, $result);
        self::assertSame($expectedjson, \json_decode($stream, true));
    }
}
