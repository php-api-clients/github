<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
    public const SPL_HASH = '0000000037ddbf030000000010a967e8';
    public const SCHEMA_DESCRIPTION = 'Protected Branch Admin Enforced';
    private string $url;
    private bool $enabled;
    public function url() : string
    {
        return $this->url;
    }
    public function enabled() : bool
    {
        return $this->enabled;
    }
}
