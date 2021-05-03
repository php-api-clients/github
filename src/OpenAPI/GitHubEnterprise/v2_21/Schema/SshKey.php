<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '0000000045a095550000000057b08344';
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
