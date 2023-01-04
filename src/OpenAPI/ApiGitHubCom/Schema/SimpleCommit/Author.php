<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleCommit;

final class Author
{
    public const SCHEMA_JSON = '{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SimpleCommit\\Author';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $email;
    public function name() : string
    {
        return $this->name;
    }
    public function email() : string
    {
        return $this->email;
    }
}
