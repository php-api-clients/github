<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema;

final class SshKey
{
    public const SCHEMA_TITLE       = 'ssh-key';
    public const SCHEMA_DESCRIPTION = '';
    private string $key;
    private string $pretty_MINUS_print;

    public function key(): string
    {
        return $this->key;
    }

    public function pretty_MINUS_print(): string
    {
        return $this->pretty_MINUS_print;
    }
}