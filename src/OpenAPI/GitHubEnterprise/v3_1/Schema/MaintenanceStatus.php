<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class MaintenanceStatus
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"status":{"type":"string"},"scheduled_time":{"type":"string"},"connection_services":{"type":"array","items":{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = 'maintenance-status';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    private string $scheduled_time;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus\ConnectionServices>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus\ConnectionServices::class)
     */
    private array $connection_services = array();
    public function status() : string
    {
        return $this->status;
    }
    public function scheduled_time() : string
    {
        return $this->scheduled_time;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus\ConnectionServices>
     */
    public function connection_services() : array
    {
        return $this->connection_services;
    }
}
