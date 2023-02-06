<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes;

final class DefaultBranch
{
    public const SCHEMA_JSON = '{"required":["from"],"type":"object","properties":{"from":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Changes\\DefaultBranch';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $from;
    public function __construct(string $from)
    {
        $this->from = $from;
    }
}
