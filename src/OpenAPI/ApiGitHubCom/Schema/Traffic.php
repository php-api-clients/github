<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Traffic
{
    public const SCHEMA_TITLE = 'Traffic';
    public const SPL_HASH = '000000000cd535260000000040effa88';
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
