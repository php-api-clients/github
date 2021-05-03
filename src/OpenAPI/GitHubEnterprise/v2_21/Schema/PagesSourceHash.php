<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '0000000065d627ba000000007ce49c9a';
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
