<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\WebHooksCommand;
use ApiClients\Client\Github\CommandBus\Handler\WebHooksHandler;
use ApiClients\Client\Github\Resource\WebHookInterface;
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
final class WebHooksHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $resource = $this->prophesize(ResourceInterface::class)->reveal();

        $service = $this->prophesize(IteratePagesService::class);
        $service->iterate('prefix/foo/bar/hooks')->shouldBeCalled()->willReturn(
            Observable::fromArray([[['php-api-clients']]])
        );

        $hydrator = $this->prophesize(Hydrator::class);
        $hydrator->hydrate(
            WebHookInterface::HYDRATE_CLASS,
            ['php-api-clients']
        )->shouldBeCalled()->willReturn($resource);

        $handler = new WebHooksHandler($service->reveal(), $hydrator->reveal());
        $result  = $this->await(
            Promise::fromObservable(
                unwrapObservableFromPromise(
                    $handler->handle(new WebHooksCommand('foo/bar', 'prefix'))
                )
            )
        );

        self::assertSame($resource, $result);
    }
}
