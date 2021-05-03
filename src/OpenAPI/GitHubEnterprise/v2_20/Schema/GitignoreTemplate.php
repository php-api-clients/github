<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000005d4c9ddb000000005494ca51';
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
