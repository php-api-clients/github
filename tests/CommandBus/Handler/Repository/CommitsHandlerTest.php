<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository;

use ApiClients\Client\Github\CommandBus\Command\Repository\CommitsCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\CommitsHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Branch;
use ApiClients\Client\Github\Resource\Repository\CommitInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;
use function React\Promise\resolve;

final class CommitsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $branchArray = [
            'foo' => 'bar',
        ];
        $branch = $this->prophesize(Branch::class)->reveal();

        $command = new CommitsCommand('api-clients/github');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->handle('repos/api-clients/github/commits')->shouldBeCalled()->willReturn(resolve(Observable::fromArray([[$branchArray]])));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(CommitInterface::HYDRATE_CLASS, $branchArray)->shouldBeCalled()->wilLReturn($branch);

        $labelsHandler = new CommitsHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        self::assertSame($branch, $this->await(Promise::fromObservable($this->await($labelsHandler->handle($command)))));
    }
}
