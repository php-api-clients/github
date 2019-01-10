<?php declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\MetaCommand;
use ApiClients\Client\Github\CommandBus\Handler\MetaHandler;
use ApiClients\Client\Github\Resource\MetaInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;
use function React\Promise\resolve;

/**
 * @internal
 */
final class MetaHandlerTest extends TestCase
{
    public function testCommand()
    {
        $meta = $this->prophesize(MetaInterface::class)->reveal();

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('meta', '', MetaInterface::HYDRATE_CLASS)->shouldBeCalled()->willReturn(resolve($meta));

        $handler = new MetaHandler($service->reveal());

        self::assertSame($meta, $this->await($handler->handle(new MetaCommand())));
    }
}
