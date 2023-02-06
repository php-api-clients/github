<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventRename
{
    public const SCHEMA_JSON = '{"title":"Issue Event Rename","required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}},"description":"Issue Event Rename"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Issue Event Rename';
    public const SCHEMA_DESCRIPTION = 'Issue Event Rename';
    public readonly string $from;
    public readonly string $to;
    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
