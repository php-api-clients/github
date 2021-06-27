<?php

declare(strict_types=1);

namespace ApiClients\Tests\Github\CommandBus\Handler;

use ApiClients\Client\Github\CommandBus\Command\OrganizationCommand;
use ApiClients\Client\Github\CommandBus\Handler\OrganizationHandler;
use ApiClients\Client\Github\Resource\OrganizationInterface;
use ApiClients\Tools\Services\Client\FetchAndHydrateService;
use ApiClients\Tools\TestUtilities\TestCase;

/**
 * @internal
 */
final class OrganizationHandlerTest extends TestCase
{
    public function testCommand(): void
    {
        $service = $this->prophesize(FetchAndHydrateService::class);
        $service->fetch('orgs/php-api-clients', '', OrganizationInterface::HYDRATE_CLASS)->shouldBeCalled();

        $handler = new OrganizationHandler($service->reveal());

        $handler->handle(new OrganizationCommand('php-api-clients'));
    }
}
