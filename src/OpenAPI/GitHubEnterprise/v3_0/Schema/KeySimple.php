<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '0000000008b93e1500000000412ebbda';
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
