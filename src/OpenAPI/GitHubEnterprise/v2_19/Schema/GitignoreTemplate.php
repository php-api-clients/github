<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000006312f9a80000000044ad25fc';
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
