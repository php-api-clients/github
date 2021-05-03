<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '0000000008b929dc00000000412ebbda';
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
