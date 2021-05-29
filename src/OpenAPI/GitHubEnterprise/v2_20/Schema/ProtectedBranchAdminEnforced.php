<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE       = 'Protected Branch Admin Enforced';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    private string $url;
    private bool $enabled;

    public function url(): string
    {
        return $this->url;
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }
}
