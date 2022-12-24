<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Traffic
{
    public const SCHEMA_JSON = '{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Traffic';
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
