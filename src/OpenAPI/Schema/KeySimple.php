<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

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
