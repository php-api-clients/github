<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class ReferrerTraffic
{
    public const SCHEMA_JSON = '{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}';
    public const SCHEMA_TITLE = 'Referrer Traffic';
    public const SCHEMA_DESCRIPTION = 'Referrer Traffic';
    public ?string $referrer;
    public ?int $count;
    public ?int $uniques;
    public function __construct(string $referrer, int $count, int $uniques)
    {
        $this->referrer = $referrer;
        $this->count = $count;
        $this->uniques = $uniques;
    }
}
