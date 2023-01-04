<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities;

final class Package
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Vulnerabilities\\Package';
    public const SCHEMA_DESCRIPTION = '';
    private string $ecosystem;
    private string $name;
    public function ecosystem() : string
    {
        return $this->ecosystem;
    }
    public function name() : string
    {
        return $this->name;
    }
}
