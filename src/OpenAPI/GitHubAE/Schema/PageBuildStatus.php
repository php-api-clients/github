<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '000000000c1cecf30000000065732ccc';
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
