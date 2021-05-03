<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '000000001c238a62000000003890ca58';
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
