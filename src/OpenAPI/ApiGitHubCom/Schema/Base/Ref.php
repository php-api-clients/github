<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base;

final class Ref
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Base\\Ref';
    public const SCHEMA_DESCRIPTION = '';
    private string $from;
    public function from() : string
    {
        return $this->from;
    }
}
