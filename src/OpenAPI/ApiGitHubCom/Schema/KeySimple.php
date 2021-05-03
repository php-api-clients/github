<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '0000000054d5ebaa0000000071115dec';
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
