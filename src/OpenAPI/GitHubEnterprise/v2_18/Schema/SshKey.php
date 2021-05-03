<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SPL_HASH = '000000000c929e1a000000006ad867a6';
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
