<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '000000000c92e2cb000000006ad867a6';
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
