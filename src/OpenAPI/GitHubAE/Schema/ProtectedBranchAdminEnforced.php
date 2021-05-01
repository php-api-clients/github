<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class ProtectedBranchAdminEnforced
{
    public const SCHEMA_TITLE = 'Protected Branch Admin Enforced';
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