<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Cwes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $cwe_id;
    public readonly string $name;
    public function __construct(string $cwe_id, string $name)
    {
        $this->cwe_id = $cwe_id;
        $this->name = $name;
    }
}
