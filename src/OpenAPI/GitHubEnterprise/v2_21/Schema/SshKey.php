<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '0000000065d62351000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = '';
    private string $key;
    private string $pretty-print;
    public function key() : string
    {
        return $this->key;
    }
    public function pretty-print() : string
    {
        return $this->pretty-print;
    }
}
