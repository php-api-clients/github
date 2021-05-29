<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\MaintenanceStatus\ConnectionServices;

final class MaintenanceStatus
{
    public const SCHEMA_TITLE          = 'maintenance-status';
    public const SCHEMA_DESCRIPTION    = '';
    private ?string $status            = null;
    private ?string $scheduled_time    = null;
    private array $connection_services = [];

    public function status(): ?string
    {
        return $this->status;
    }

    public function scheduled_time(): ?string
    {
        return $this->scheduled_time;
    }

    /**
     * @return array<ConnectionServices>
     */
    public function connection_services(): array
    {
        return $this->connection_services;
    }
}
