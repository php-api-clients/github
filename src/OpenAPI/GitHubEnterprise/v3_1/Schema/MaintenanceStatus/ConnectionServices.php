<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\MaintenanceStatus;

final class ConnectionServices
{
    public const SCHEMA_JSON = '{"required":["name","number"],"type":"object","properties":{"name":{"type":"string"},"number":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'MaintenanceStatus\\ConnectionServices';
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
