<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class SshKey
{
    public const SCHEMA_TITLE = 'ssh-key';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $key = null;
    private ?string $pretty_MINUS_print = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function pretty_MINUS_print() : ?string
    {
        return $this->pretty_MINUS_print;
    }
}
