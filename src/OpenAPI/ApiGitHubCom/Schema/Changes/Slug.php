<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class Slug
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Changes\\Slug';
    public const SCHEMA_DESCRIPTION = '';
    private string $from;
    public function from() : string
    {
        return $this->from;
    }
}
