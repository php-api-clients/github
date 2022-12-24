<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class C58D971F237032E9Cca58520262E9Ca3E
{
    public const SCHEMA_JSON = '{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_58d971f237032e9cca58520262e9ca3e';
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
