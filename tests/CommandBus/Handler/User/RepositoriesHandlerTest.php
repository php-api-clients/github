<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\RepositoriesCommand;
use ApiClients\Client\Github\CommandBus\Handler\User\RepositoriesHandler;
use ApiClients\Client\Github\Resource\Async\Repository;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class RepositoriesHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $repositoryArray = ['foo' => 'bar'];
        $repository      = $this->prophesize(Repository::class)->reveal();

        $command = new RepositoriesCommand('wyrihaximus');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('users/wyrihaximus/repos')->shouldBeCalled()->willReturn(Observable::fromArray([[$repositoryArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(RepositoryInterface::HYDRATE_CLASS, $repositoryArray)->shouldBeCalled()->wilLReturn($repository);

        $labelsHandler = new RepositoriesHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        Promise::fromObservable($this->await($labelsHandler->handle($command)));
    }
}
