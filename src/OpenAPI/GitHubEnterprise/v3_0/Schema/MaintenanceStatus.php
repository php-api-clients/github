<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class MaintenanceStatus
{
    public const SCHEMA_TITLE = 'maintenance-status';
    public const SPL_HASH = '0000000065dd77e6000000006352672d';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    private string $scheduled_time;
    private array $connection_services;
    public function status() : string
    {
        return $this->status;
    }
    public function scheduled_time() : string
    {
        return $this->scheduled_time;
    }
    public function connection_services() : array
    {
        return $this->connection_services;
    }
}
