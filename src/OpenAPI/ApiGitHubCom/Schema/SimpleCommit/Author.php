<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit;

final class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'SimpleCommit\\Author';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $name;
    public readonly string $email;
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
