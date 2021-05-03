<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '000000004a4ba88a0000000021d13a21';
    public const SCHEMA_DESCRIPTION = 'Page Build Status';
    private string $url;
    private string $status;
    public function url() : string
    {
        return $this->url;
    }
    public function status() : string
    {
        return $this->status;
    }
}
