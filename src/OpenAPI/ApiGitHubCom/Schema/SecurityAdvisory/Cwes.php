<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Cwes
{
    public const SCHEMA_JSON = '{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Cwes';
    public const SCHEMA_DESCRIPTION = '';
    private string $cwe_id;
    private string $name;
    public function cwe_id() : string
    {
        return $this->cwe_id;
    }
    public function name() : string
    {
        return $this->name;
    }
}
