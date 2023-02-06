<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_JSON = '{"title":"Protected Branch Admin Enforced","required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins"]},"enabled":{"type":"boolean","examples":[true]}},"description":"Protected Branch Admin Enforced"}';
    public const SCHEMA_EXAMPLE = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins","enabled":true}';
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    public readonly string $url;
    public readonly bool $enabled;
    public function __construct(string $url, bool $enabled)
    {
        $this->url = $url;
        $this->enabled = $enabled;
    }
}
