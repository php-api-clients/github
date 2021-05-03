<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Traffic
{
    public const SCHEMA_TITLE = 'Traffic';
    public const SPL_HASH = '00000000207014ae0000000042193899';
    public const SCHEMA_DESCRIPTION = '';
    private string $timestamp;
    private int $uniques;
    private int $count;
    public function timestamp() : string
    {
        return $this->timestamp;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
    public function count() : int
    {
        return $this->count;
    }
}
