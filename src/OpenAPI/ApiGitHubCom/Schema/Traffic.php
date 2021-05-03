<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Traffic
{
    public const SCHEMA_TITLE = 'Traffic';
    public const SPL_HASH = '00000000252f4b5a0000000029de5079';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $timestamp = null;
    private ?int $uniques = null;
    private ?int $count = null;
    public function timestamp() : ?string
    {
        return $this->timestamp;
    }
    public function uniques() : ?int
    {
        return $this->uniques;
    }
    public function count() : ?int
    {
        return $this->count;
    }
}
