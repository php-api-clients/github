<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '000000002eab1edb00000000697c5254';
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
