<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\RenamedIssueEvent;

final class Rename
{
    public const SCHEMA_JSON = '{"required":["from","to"],"type":"object","properties":{"from":{"type":"string"},"to":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'RenamedIssueEvent\\Rename';
    public const SCHEMA_DESCRIPTION = '';
    private string $from;
    private string $to;
    public function from() : string
    {
        return $this->from;
    }
    public function to() : string
    {
        return $this->to;
    }
}
