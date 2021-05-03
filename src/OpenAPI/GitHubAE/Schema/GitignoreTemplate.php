<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000005dfdd1bb0000000040885a06';
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
