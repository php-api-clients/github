<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '000000001c238d12000000003890ca58';
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
