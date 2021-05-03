<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000000c92eb14000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'Gitignore Template';
    private ?string $name = null;
    private ?string $source = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function source() : ?string
    {
        return $this->source;
    }
}
