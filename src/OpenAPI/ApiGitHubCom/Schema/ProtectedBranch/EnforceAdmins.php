<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class EnforceAdmins
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\EnforceAdmins';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private bool $enabled;
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
