<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '0000000008b9215600000000412ebbda';
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
