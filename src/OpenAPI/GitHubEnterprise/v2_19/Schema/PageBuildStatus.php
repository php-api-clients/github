<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
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
