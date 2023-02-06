<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory;

final class References
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DependabotAlertSecurityAdvisory\\References';
    public const SCHEMA_DESCRIPTION = 'A link to additional advisory information.';
    /**
     * The URL of the reference.
     */
    public readonly string $url;
    public function __construct(string $url)
    {
        $this->url = $url;
    }
}
