<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class KeySimple
{
    public const SCHEMA_JSON = '{"title":"Key Simple","required":["key","id"],"type":"object","properties":{"id":{"type":"integer"},"key":{"type":"string"}},"description":"Key Simple"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Key Simple';
    public const SCHEMA_DESCRIPTION = 'Key Simple';
    public readonly int $id;
    public readonly string $key;
    public function __construct(int $id, string $key)
    {
        $this->id = $id;
        $this->key = $key;
    }
}
