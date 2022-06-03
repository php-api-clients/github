<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SCHEMA_DESCRIPTION = '';
    private string $branch;
    private string $path;
    public function branch() : string
    {
        return $this->branch;
    }
    public function path() : string
    {
        return $this->path;
    }
}
