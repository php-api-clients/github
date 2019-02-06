<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\BlobCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\BlobHandler;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use function React\Promise\Stream\buffer;
use React\Stream\ThroughStream;
use RingCentral\Psr7\Response;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class BlobHandlerTest extends TestCase
{
    public function provideCommands()
    {
        /*yield [
            function () {
                $body = 'foo.bar';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(1, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new RenderMarkdownCommand(
                    $stream,
                    'gfm',
                    'php-api-clients/github'
                );
                $expectedJson = [
                    'text' => $body,
                    'mode' => 'gfm',
                    'context' => 'php-api-clients/github',
                ];

                return [$loop, $request, $expectedJson];
            },
        ];*/

        yield [
            function () {
                $body = 'foo.bar';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(1, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new BlobCommand(
                    'login/repo',
                    $stream
                );
                $expectedJson = [
                    'encoding' => 'base64',
                    'content' => \base64_encode($body),
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
        $json = [
            'foo' => 'bar',
        ];
        $stream = null;
        $jsonStream = new JsonStream($json);

        $tree = $this->prophesize(TreeInterface::class)->reveal();

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(Argument::that(function (RequestInterface $request) use (&$stream) {
            buffer($request->getBody())->done(function ($json) use (&$stream) {
                $stream = $json;
            });

            return true;
        }))->willReturn(timedPromise($loop, 1, new Response(
            200,
            [],
            $jsonStream
        )));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(TreeInterface::HYDRATE_CLASS, $json)->shouldBeCalled()->willReturn($tree);

        $handler = new BlobHandler($requestService->reveal(), $hydrator->reveal(), $loop);

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($tree, $result);
        self::assertSame($expectedjson, \json_decode($stream, true));
    }
}
