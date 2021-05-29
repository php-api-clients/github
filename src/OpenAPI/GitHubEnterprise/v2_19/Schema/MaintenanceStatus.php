<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

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

    public function connection_services(): array
    {
        return $this->connection_services;
    }
}
