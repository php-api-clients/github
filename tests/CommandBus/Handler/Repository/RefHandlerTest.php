<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\RefCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\RefHandler;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Client\Github\Resource\Git\TreeInterface;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Transport\Service\RequestService;
use ApiClients\Middleware\Json\JsonStream;
use ApiClients\Tools\TestUtilities\TestCase;
use React\EventLoop\Factory;
use RingCentral\Psr7\Request;
use RingCentral\Psr7\Response;
use function WyriHaximus\React\timedPromise;

/**
 * @internal
 */
final class RefHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            function () {
                $loop = Factory::create();
                $command = new RefCommand(
                    'login/repo',
                    'refs/heads/so-not-master',
                    'sha1234567890'
                );

                return [$loop, $command];
            },
        ];
    }

    /**
     * @dataProvider provideCommands
     */
    public function testCommand(callable $callable)
    {
        list($loop, $command) = $callable();

        $json = [
            'foo' => 'bar',
        ];
        $jsonStream = new JsonStream($json);

        $tree = $this->prophesize(TreeInterface::class)->reveal();

        $requestService = $this->prophesize(RequestService::class);
        $requestService->request(new Request(
            'POST',
            'repos/login/repo/git/refs/heads/so-not-master',
            [],
            new JsonStream([
                'sha' => 'sha1234567890',
            ])
        ))->willReturn(timedPromise($loop, 1, new Response(
            200,
            [],
            $jsonStream
        )));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(RefInterface::HYDRATE_CLASS, $json)->shouldBeCalled()->willReturn($tree);

        $handler = new RefHandler($requestService->reveal(), $hydrator->reveal());

        $result = $this->await($handler->handle($command), $loop);
        self::assertSame($tree, $result);
    }
}
