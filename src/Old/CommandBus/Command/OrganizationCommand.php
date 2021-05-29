<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\CommandBus\Command;

use WyriHaximus\Tactician\CommandHandler\Annotations\Handler;

/**
 * @Handler("ApiClients\Client\Github\CommandBus\Handler\OrganizationHandler")
 */
final class OrganizationCommand
{
    private string $organization;

    public function __construct(string $organization = '')
    {
        $this->organization = $organization;
    }

    public function getOrganization(): string
    {
        return $this->organization;
    }
}
