<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '0000000008b922b900000000412ebbda';
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
