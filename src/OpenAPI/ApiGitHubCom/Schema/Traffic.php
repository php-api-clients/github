<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Traffic
{
    public const SCHEMA_JSON = '{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Traffic';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $timestamp;
    public readonly int $uniques;
    public readonly int $count;
    public function __construct(string $timestamp, int $uniques, int $count)
    {
        $this->timestamp = $timestamp;
        $this->uniques = $uniques;
        $this->count = $count;
    }
}
