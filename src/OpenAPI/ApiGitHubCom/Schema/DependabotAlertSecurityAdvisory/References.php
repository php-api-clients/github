<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class References
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\References';
    public const SCHEMA_DESCRIPTION = 'A link to additional advisory information.';
    /**
     * The URL of the reference.
     */
    private string $url;
    /**
     * The URL of the reference.
     */
    public function url() : string
    {
        return $this->url;
    }
}
