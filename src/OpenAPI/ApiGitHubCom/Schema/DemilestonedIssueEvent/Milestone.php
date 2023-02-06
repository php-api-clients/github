<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DemilestonedIssueEvent;

final class Milestone
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'DemilestonedIssueEvent\\Milestone';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $title;
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
