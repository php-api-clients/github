<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PageBuildStatus
{
    public const SCHEMA_TITLE = 'Page Build Status';
    public const SPL_HASH = '000000000c92e2ec000000006ad867a6';
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
