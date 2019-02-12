<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\TreeCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\TreeHandler;
use ApiClients\Client\Github\Resource\Git\TreeInterface;
use ApiClients\Client\Github\VO\NamedBlob;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;
use React\EventLoop\Factory;
use function React\Promise\Stream\buffer;
use RingCentral\Psr7\Response;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class TreeHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            function () {
                $loop = Factory::create();
                $blob = new NamedBlob(
                    'file.name',
                    '100644',
                    'blob',
                    'sha512',
                    null
                );
                $command = new TreeCommand(
                    'login/repo',
                    'sha1234567890',
                    $blob
                );
                $expectedJson = [
                    'base_tree' => 'sha1234567890',
                    'tree' => [
                        [
                            'path' => 'file.name',
                            'mode' => '100644',
                            'type' => 'blob',
                            'sha' => 'sha512',
                        ],
                    ],
                ];

                return [$loop, $command, $expectedJson];
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

        $handler = new TreeHandler($requestService->reveal(), $hydrator->reveal(), $loop);

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($tree, $result);
        self::assertSame($expectedjson, \json_decode($stream, true));
    }
}
