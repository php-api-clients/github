<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\CommitCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\CommitHandler;
use ApiClients\Client\Github\Resource\Git\CommitInterface;
use ApiClients\Client\Github\Resource\Git\TreeInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use RingCentral\Psr7\Response;

use function json_decode;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class CommitHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            static function () {
                $loop         = Factory::create();
                $command      = new CommitCommand(
                    'login/repo',
                    'message',
                    'ska punk metal',
                    'foo',
                    'bar',
                    'baz'
                );
                $expectedJson = [
                    'message' => 'message',
                    'tree' => 'ska punk metal',
                    'parents' => [
                        'foo',
                        'bar',
                        'baz',
                    ],
                ];

                return [$loop, $command, $expectedJson];
            },
        ];
    }

    /**
     * @dataProvider provideCommands
     */
    public function testCommand(callable $callable): void
    {
        [$loop, $command, $expectedjson] = $callable();
        $json                            = ['foo' => 'bar'];
        $stream                          = null;
        $jsonStream                      = new JsonStream($json);

        $tree = $this->prophesize(TreeInterface::class)->reveal();

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(Argument::that(static function (RequestInterface $request) use (&$stream) {
            $stream = $request->getBody()->getContents();

            return true;
        }))->willReturn(timedPromise($loop, 1, new Response(
            200,
            [],
            $jsonStream
        )));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(CommitInterface::HYDRATE_CLASS, $json)->shouldBeCalled()->willReturn($tree);

        $handler = new CommitHandler($requestService->reveal(), $hydrator->reveal(), $loop);

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($tree, $result);
        self::assertSame($expectedjson, json_decode($stream, true));
    }
}
