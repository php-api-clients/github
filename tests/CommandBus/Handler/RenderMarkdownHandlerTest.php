<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\RenderMarkdownCommand;
use ApiClients\Client\Github\CommandBus\Handler\RenderMarkdownHandler;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use function React\Promise\Stream\buffer;
use React\Stream\ThroughStream;
use RingCentral\Psr7\BufferStream;
use RingCentral\Psr7\Response;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class RenderMarkdownHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
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
        ];

        yield [
            function () {
                $body = 'foo.bar';
                $loop = Factory::create();
                $stream = new ThroughStream();
                $loop->addTimer(1, function () use ($stream, $body) {
                    $stream->end($body);
                });
                $request = new RenderMarkdownCommand(
                    $stream,
                    '',
                    ''
                );
                $expectedJson = [
                    'text' => $body,
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
        $stream = null;
        $bufferStream = new BufferStream();
        $bufferStream->write('foo.bar');

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(Argument::that(function (RequestInterface $request) use (&$stream) {
            buffer($request->getBody())->done(function ($json) use (&$stream) {
                $stream = $json;
            });

            return true;
        }))->willReturn(timedPromise($loop, 1, new Response(
            200,
            [],
            $bufferStream
        )));

        $handler = new RenderMarkdownHandler($requestService->reveal(), $loop);

        $result = (string)$this->await($handler->handle($command), $loop);
        self::assertSame('foo.bar', $result);
        self::assertSame($expectedjson, \json_decode($stream, true));
    }
}
