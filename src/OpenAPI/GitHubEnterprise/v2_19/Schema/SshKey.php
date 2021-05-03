<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '00000000159327c2000000001856c88e';
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
