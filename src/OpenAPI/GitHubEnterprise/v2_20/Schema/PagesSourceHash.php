<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '000000005d4c9a53000000005494ca51';
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
