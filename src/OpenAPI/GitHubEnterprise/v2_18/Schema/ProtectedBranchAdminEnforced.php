<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '00000000577b28020000000061bd81a4';
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
