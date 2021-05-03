<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '000000005dfdd8000000000040885a06';
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
