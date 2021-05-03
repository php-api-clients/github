<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '00000000269f3a3200000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Key Simple';
    private ?int $id = null;
    private ?string $key = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function key() : ?string
    {
        return $this->key;
    }
}
