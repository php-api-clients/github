<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListTagProtection\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"array","items":{"title":"Tag protection","required":["pattern"],"type":"object","properties":{"id":{"type":"integer","examples":[2]},"created_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"updated_at":{"type":"string","examples":["2011-01-26T19:01:12Z"]},"enabled":{"type":"boolean","examples":[true]},"pattern":{"type":"string","examples":["v1.*"]}},"description":"Tag protection"}}';
    public const SCHEMA_TITLE = 'ListTagProtection\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
}
