<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MilestonedIssueEvent;

final class Milestone
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'MilestonedIssueEvent\\Milestone';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $title;
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
