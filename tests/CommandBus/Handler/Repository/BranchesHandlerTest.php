<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\BranchesCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\BranchesHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Branch;
use ApiClients\Client\Github\Resource\Repository\BranchInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class BranchesHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $branchArray = ['foo' => 'bar'];
        $branch      = $this->prophesize(Branch::class)->reveal();

        $command = new BranchesCommand('api-clients/github');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('repos/api-clients/github/branches')->shouldBeCalled()->willReturn(Observable::fromArray([[$branchArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(BranchInterface::HYDRATE_CLASS, $branchArray)->shouldBeCalled()->wilLReturn($branch);

        $labelsHandler = new BranchesHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($branch, $this->await(Promise::fromObservable($this->await($labelsHandler->handle($command)))));
    }
}
