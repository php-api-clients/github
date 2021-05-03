<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class MaintenanceStatus
{
    public const SCHEMA_TITLE = 'maintenance-status';
    public const SPL_HASH = '000000004a4bac0d0000000021d13a21';
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
