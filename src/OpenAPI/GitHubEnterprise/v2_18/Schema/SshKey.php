<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '000000002eab1fcb00000000697c5254';
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
