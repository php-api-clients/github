<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PagesSourceHash
{
    public const SCHEMA_TITLE = 'Pages Source Hash';
    public const SPL_HASH = '0000000054d5e1610000000071115dec';
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
