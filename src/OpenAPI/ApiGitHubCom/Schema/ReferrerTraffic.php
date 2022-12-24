<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class ReferrerTraffic
{
    public const SCHEMA_JSON = '{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}';
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    private string $referrer;
    private int $count;
    private int $uniques;
    public function referrer() : string
    {
        return $this->referrer;
    }
    public function count() : int
    {
        return $this->count;
    }
    public function uniques() : int
    {
        return $this->uniques;
    }
}
