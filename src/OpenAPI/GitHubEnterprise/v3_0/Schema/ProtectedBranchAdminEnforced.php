<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '0000000065dd6e86000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    private string $url;
    private boolean $enabled;
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : boolean
    {
        return $this->enabled;
    }
}
