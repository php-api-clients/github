<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '00000000269f290a00000000005e85e5';
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
