<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitignoreTemplate
{
    public const SCHEMA_TITLE = 'Gitignore Template';
    public const SPL_HASH = '000000001c23f6cf000000003890ca58';
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
