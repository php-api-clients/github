<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '0000000037ddba850000000010a967e8';
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
