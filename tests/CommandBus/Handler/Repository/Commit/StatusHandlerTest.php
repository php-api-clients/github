<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler\Repository\Commit;

use ApiClients\Client\Github\CommandBus\Command\Repository\Commit\StatusCommand;
use ApiClients\Client\Github\CommandBus\Handler\Repository\Commit\StatusHandler;
use ApiClients\Client\Github\Resource\Async\Repository\Commit;
use ApiClients\Client\Github\Resource\Repository\Commit\CombinedStatusInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

use function React\Promise\resolve;

/**
 * @internal
 */
final class StatusHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $resource = $this->prophesize(Commit::class);
        $resource->url()->shouldBeCalled()->wilLReturn('https://example.com');
        $command = new StatusCommand($resource->reveal());

        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('https://example.com/status', '', CombinedStatusInterface::HYDRATE_CLASS)->shouldBeCalled()->willReturn(resolve(true));

        $handler = new StatusHandler($service->reveal());

        self::assertTrue($this->await($handler->handle($command)));
    }
}
