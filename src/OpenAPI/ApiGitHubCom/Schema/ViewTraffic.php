<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ViewTraffic
{
    public const SCHEMA_JSON = '{"title":"View Traffic","required":["uniques","count","views"],"type":"object","properties":{"count":{"type":"integer","examples":[14850]},"uniques":{"type":"integer","examples":[3782]},"views":{"type":"array","items":{"title":"Traffic","required":["timestamp","uniques","count"],"type":"object","properties":{"timestamp":{"type":"string","format":"date-time"},"uniques":{"type":"integer"},"count":{"type":"integer"}}}}},"description":"View Traffic"}';
    public const SCHEMA_EXAMPLE = '{"count":14850,"uniques":3782}';
    public const SCHEMA_TITLE = 'View Traffic';
    public const SCHEMA_DESCRIPTION = 'View Traffic';
    public readonly int $count;
    public readonly int $uniques;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic>
     */
    public readonly array $views;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Traffic> $views
     */
    public function __construct(int $count, int $uniques, array $views)
    {
        $this->count = $count;
        $this->uniques = $uniques;
        $this->views = $views;
    }
}
