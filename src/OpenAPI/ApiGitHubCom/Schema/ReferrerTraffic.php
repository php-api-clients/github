<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_JSON = '{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}';
    public const SCHEMA_EXAMPLE = '{"referrer":"Google","count":4,"uniques":3}';
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    public readonly string $referrer;
    public readonly int $count;
    public readonly int $uniques;
    public function __construct(string $referrer, int $count, int $uniques)
    {
        $this->referrer = $referrer;
        $this->count = $count;
        $this->uniques = $uniques;
    }
}
