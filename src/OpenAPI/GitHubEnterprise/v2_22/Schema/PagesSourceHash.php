<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '00000000269f217300000000005e85e5';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $branch = null;
    private ?string $path = null;
    public function branch() : ?string
    {
        return $this->branch;
    }
    public function path() : ?string
    {
        return $this->path;
    }
}
