<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\WatchingCommand;
use ApiClients\Client\Github\CommandBus\Handler\WatchingHandler;
use ApiClients\Client\Github\Resource\RepositoryInterface;
use ApiClients\Client\Github\Service\IteratePagesService;
use ApiClients\Foundation\Hydrator\Hydrator;
use ApiClients\Foundation\Resource\ResourceInterface;
use function ApiClients\Tools\Rx\unwrapObservableFromPromise;
use ApiClients\Tools\TestUtilities\TestCase;
use Rx\Observable;
use Rx\React\Promise;

/**
 * @internal
 */
final class WatchingHandlerTest extends TestCase
{
    public function testCommand()
    {
        $resource = $this->prophesize(ResourceInterface::class)->reveal();

        $service = $this->prophesize(IteratePagesService::class);
        $service->iterate(
            'user/subscriptions'
        )->shouldBeCalled()->willReturn(Observable::fromArray([[['php-api-clients']]]));

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(
            RepositoryInterface::HYDRATE_CLASS,
            ['php-api-clients']
        )->shouldBeCalled()->willReturn($resource);

        $handler = new WatchingHandler($service->reveal(), $hydrator->reveal());
        $result = $this->await(
            Promise::fromObservable(
                unwrapObservableFromPromise(
                    $handler->handle(new WatchingCommand())
                )
            )
        );

        self::assertSame($resource, $result);
    }
}
