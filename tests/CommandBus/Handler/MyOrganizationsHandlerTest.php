<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\MyOrganizationsCommand;
use ApiClients\Client\Github\CommandBus\Handler\MyOrganizationsHandler;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Resource\ResourceInterface;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;

/**
 * @internal
 */
final class MyOrganizationsHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = $this->prophesize(ResourceInterface::class)->reveal();

        $service = $this->prophesize(IteratePagesService::class);
        $service->iterate('user/orgs')->shouldBeCalled()->willReturn(Observable::fromArray([[['php-api-clients']]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(OrganizationInterface::HYDRATE_CLASS, ['php-api-clients'])->shouldBeCalled()->willReturn($resource);

        $handler = new MyOrganizationsHandler($service->reveal(), $hydrator->reveal());
        $result = $this->await(
            Promise::fromObservable(
                unwrapObservableFromPromise(
                    $handler->handle(new MyOrganizationsCommand())
                )
            )
        );

        self::assertSame($resource, $result);
    }
}
