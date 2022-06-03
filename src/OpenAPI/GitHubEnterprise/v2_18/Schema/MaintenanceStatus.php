<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class MaintenanceStatus
{
    public const SCHEMA_TITLE = 'maintenance-status';
    public const SCHEMA_DESCRIPTION = '';
    private string $status;
    private string $scheduled_time;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\MaintenanceStatus\ConnectionServices>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\MaintenanceStatus\ConnectionServices::class)
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
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\MaintenanceStatus\ConnectionServices>
     */
    public function connection_services() : array
    {
        return $this->connection_services;
    }
}
