<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Identifiers';
    public const SCHEMA_DESCRIPTION = '';
    private string $type;
    private string $value;
    public function type() : string
    {
        return $this->type;
    }
    public function value() : string
    {
        return $this->value;
    }
}
