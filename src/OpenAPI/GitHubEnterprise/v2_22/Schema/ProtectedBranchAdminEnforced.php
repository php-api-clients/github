<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '000000004a4ba56d0000000021d13a21';
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
