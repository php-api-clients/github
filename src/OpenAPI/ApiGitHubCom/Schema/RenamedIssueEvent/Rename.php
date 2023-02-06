<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RenamedIssueEvent;

final class Rename
{
    public const SCHEMA_JSON = '{"required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'RenamedIssueEvent\\Rename';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $from;
    public readonly string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
