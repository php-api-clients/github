<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class Identifiers
{
    public const SCHEMA_JSON = '{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\Identifiers';
    public const SCHEMA_DESCRIPTION = 'An advisory identifier.';
    /**
     * The type of advisory identifier.
     */
    private string $type;
    /**
     * The value of the advisory identifer.
     */
    private string $value;
    /**
     * The type of advisory identifier.
     */
    public function type() : string
    {
        return $this->type;
    }
    /**
     * The value of the advisory identifer.
     */
    public function value() : string
    {
        return $this->value;
    }
}
