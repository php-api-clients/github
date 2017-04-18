<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\User;

use ApiClients\Client\Github\CommandBus\Command\User\OrganizationsCommand;
use ApiClients\Client\Github\CommandBus\Handler\User\OrganizationsHandler;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

final class OrganizationsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $organizationArray = [
            'foo' => 'bar',
        ];
        $organization = $this->prophesize(OrganizationInterface::class)->reveal();

        $command = new OrganizationsCommand('wyrihaximus');

        $iteratePagesService = $this->prophesize(IteratePagesService::class);
        $iteratePagesService->iterate('users/wyrihaximus/orgs')->shouldBeCalled()->willReturn(Observable::fromArray([[$organizationArray]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, $organizationArray)->shouldBeCalled()->wilLReturn($organization);

        $labelsHandler = new OrganizationsHandler(
            $iteratePagesService->reveal(),
            $hydrator->reveal()
        );

        Promise::fromObservable($this->await($labelsHandler->handle($command)));
    }
}
