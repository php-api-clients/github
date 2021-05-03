<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '00000000269f219e00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Page Build Status';
    private ?string $url = null;
    private ?string $status = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function status() : ?string
    {
        return $this->status;
    }
}
