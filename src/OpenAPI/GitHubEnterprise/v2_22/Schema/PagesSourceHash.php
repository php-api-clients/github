<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '000000004a4ba8670000000021d13a21';
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
