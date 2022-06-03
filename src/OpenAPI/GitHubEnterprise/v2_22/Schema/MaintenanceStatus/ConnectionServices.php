<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\MaintenanceStatus;

final class ConnectionServices
{
    public const SCHEMA_TITLE = 'maintenance-status::connection_services';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private int $number;
    public function name() : string
    {
        return $this->name;
    }
    public function number() : int
    {
        return $this->number;
    }
}
