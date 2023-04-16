<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

final readonly class ProtectedBranchAdminEnforced
{
    public const SCHEMA_JSON         = '{"title":"Protected Branch Admin Enforced","required":["url","enabled"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins"]},"enabled":{"type":"boolean","examples":[true]}},"description":"Protected Branch Admin Enforced"}';
    public const SCHEMA_TITLE        = 'Protected Branch Admin Enforced';
    public const SCHEMA_DESCRIPTION  = 'Protected Branch Admin Enforced';
    public const SCHEMA_EXAMPLE_DATA = '{"url":"https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches\\/master\\/protection\\/enforce_admins","enabled":true}';

    public function __construct(public string $url, public bool $enabled)
    {
    }
}
