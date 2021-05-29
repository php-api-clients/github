<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE       = 'Protected Branch Admin Enforced';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    private ?string $url            = null;
    private ?bool $enabled          = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function enabled(): ?bool
    {
        return $this->enabled;
    }
}
