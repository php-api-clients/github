<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class MaintenanceStatus
{
    public const SCHEMA_TITLE = 'maintenance-status';
    public const SPL_HASH = '000000003d2c38fd0000000068da5fbb';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $status = null;
    private ?string $scheduled_time = null;
    private array $connection_services = array();
    public function status() : ?string
    {
        return $this->status;
    }
    public function scheduled_time() : ?string
    {
        return $this->scheduled_time;
    }
    public function connection_services() : array
    {
        return $this->connection_services;
    }
}
