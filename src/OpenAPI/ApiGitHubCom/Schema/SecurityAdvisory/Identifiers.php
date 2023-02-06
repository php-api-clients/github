<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Identifiers';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $type;
    public readonly string $value;
    public function __construct(string $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
}
