<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '000000002eab649e00000000697c5254';
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
