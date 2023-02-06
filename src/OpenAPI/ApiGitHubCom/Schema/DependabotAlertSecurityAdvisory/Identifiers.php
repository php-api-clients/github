<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\Identifiers';
    public const SCHEMA_DESCRIPTION = 'An advisory identifier.';
    /**
     * The type of advisory identifier.
     */
    public readonly string $type;
    /**
     * The value of the advisory identifer.
     */
    public readonly string $value;
    public function __construct(string $type, string $value)
    {
        $this->type = $type;
        $this->value = $value;
    }
}
