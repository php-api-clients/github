<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '0000000008b9244000000000412ebbda';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    private ?string $url = null;
    private ?bool $enabled = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function enabled() : ?bool
    {
        return $this->enabled;
    }
}
