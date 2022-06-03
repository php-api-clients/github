<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SCHEMA_DESCRIPTION = 'Key Simple';
    private int $id;
    private string $key;
    public function id() : int
    {
        return $this->id;
    }
    public function key() : string
    {
        return $this->key;
    }
}
