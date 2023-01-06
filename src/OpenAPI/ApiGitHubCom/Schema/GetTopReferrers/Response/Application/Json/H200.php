<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GetTopReferrers\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Referrer Traffic","required":["referrer","uniques","count"],"type":"object","properties":{"referrer":{"type":"string","examples":["Google"]},"count":{"type":"integer","examples":[4]},"uniques":{"type":"integer","examples":[3]}},"description":"Referrer Traffic"}}';
    public const SCHEMA_TITLE = 'GetTopReferrers\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
