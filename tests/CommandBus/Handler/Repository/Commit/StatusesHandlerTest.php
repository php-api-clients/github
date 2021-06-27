<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusesCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\StatusesHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Branch;
use ApiClients\Client\Github\Resource\Async\Repository\Commit;
use ApiClients\Client\Github\Resource\Repository\Commit\StatusInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class StatusesHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $branchArray = ['foo' => 'bar'];
        $branch      = $this->prophesize(Branch::class)->reveal();

        $commit = $this->prophesize(Commit::class);
        $commit->url()->shouldBeCalled()->willReturn('repos/api-clients/github/commits/123');

        $command = new StatusesCommand($commit->reveal());

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('repos/api-clients/github/commits/123/statuses')->shouldBeCalled()->willReturn(Observable::fromArray([[$branchArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(StatusInterface::HYDRATE_CLASS, $branchArray)->shouldBeCalled()->wilLReturn($branch);

        $labelsHandler = new StatusesHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($branch, $this->await(Promise::fromObservable($this->await($labelsHandler->handle($command)))));
    }
}
