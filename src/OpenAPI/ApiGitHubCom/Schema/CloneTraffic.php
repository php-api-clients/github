<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CloneTraffic
{
    public const SCHEMA_JSON = '{"title":"Clone Traffic","required":["uniques","count","clones"],"type":"object","properties":{"count":{"type":"integer","examples":[173]},"uniques":{"type":"integer","examples":[128]},"clones":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"Clone Traffic"}';
    public const SCHEMA_TITLE = 'Clone Traffic';
    public const SCHEMA_DESCRIPTION = 'Clone Traffic';
    public readonly int $count;
    public readonly int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    public readonly array $clones;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic> $clones
     */
    public function __construct(int $count, int $uniques, array $clones)
    {
        $this->count = $count;
        $this->uniques = $uniques;
        $this->clones = $clones;
    }
}
