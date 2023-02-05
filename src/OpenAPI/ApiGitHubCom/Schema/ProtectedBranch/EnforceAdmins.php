<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ProtectedBranch;

final class EnforceAdmins
{
    public const SCHEMA_JSON = '{"required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri"},"enabled":{"type":"boolean"}},"additionalProperties":false}';
    public const SCHEMA_TITLE = 'ProtectedBranch\\EnforceAdmins';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $url;
    public readonly bool $enabled;
    public function __construct(string $url, bool $enabled)
    {
        $this->url = $url;
        $this->enabled = $enabled;
    }
}
