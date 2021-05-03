<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '0000000008b93ea100000000412ebbda';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $key = null;
    private ?string $pretty-print = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function pretty-print() : ?string
    {
        return $this->pretty-print;
    }
}
