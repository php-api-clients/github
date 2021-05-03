<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class KeySimple
{
    public const SCHEMA_TITLE = 'Key Simple';
    public const SPL_HASH = '000000005d4ce176000000005494ca51';
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
