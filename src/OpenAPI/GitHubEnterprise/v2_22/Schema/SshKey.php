<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '000000004a4bacb20000000021d13a21';
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
