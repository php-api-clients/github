<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities;

final class Package
{
    public const SCHEMA_JSON = '{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Vulnerabilities\\Package';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $ecosystem;
    public readonly string $name;
    public function __construct(string $ecosystem, string $name)
    {
        $this->ecosystem = $ecosystem;
        $this->name = $name;
    }
}
