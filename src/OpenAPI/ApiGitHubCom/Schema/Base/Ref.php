<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Base;

final class Ref
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Base\\Ref';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
