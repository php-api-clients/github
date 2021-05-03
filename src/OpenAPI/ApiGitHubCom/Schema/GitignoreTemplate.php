<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '0000000054d5fb490000000071115dec';
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
