<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\RefsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\RefsHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Branch;
use ApiClients\Client\Github\Resource\Git\RefInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class RefsHandlerTest extends TestCase
{
    public function provideCommands()
    {
        yield [
            new RefsCommand('api-clients/github', null),
            'repos/api-clients/github/git/refs',
        ];

        yield [
            new RefsCommand('api-clients/github', ''),
            'repos/api-clients/github/git/refs',
        ];

        yield [
            new RefsCommand('api-clients/github', 'tags'),
            'repos/api-clients/github/git/refs/tags',
        ];

        yield [
            new RefsCommand('api-clients/github', 'heads'),
            'repos/api-clients/github/git/refs/heads',
        ];
    }

    /**
     * @dataProvider provideCommands
     */
    public function testCommand(RefsCommand $command, string $path): void
    {
        $branchArray = ['foo' => 'bar'];
        $branch      = $this->prophesize(Branch::class)->reveal();

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate($path)->shouldBeCalled()->willReturn(Observable::fromArray([[$branchArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(RefInterface::HYDRATE_CLASS, $branchArray)->shouldBeCalled()->wilLReturn($branch);

        $labelsHandler = new RefsHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($branch, $this->await(Promise::fromObservable($this->await($labelsHandler->handle($command)))));
    }
}
