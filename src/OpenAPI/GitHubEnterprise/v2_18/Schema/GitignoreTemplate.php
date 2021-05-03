<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000002eab6ac500000000697c5254';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    private string $name;
    private string $source;
    public function name() : string
    {
        return $this->name;
    }
    public function source() : string
    {
        return $this->source;
    }
}
