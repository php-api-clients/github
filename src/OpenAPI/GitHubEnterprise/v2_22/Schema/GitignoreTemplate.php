<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000004a4ba01e0000000021d13a21';
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
