<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '000000005d4ce606000000005494ca51';
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
