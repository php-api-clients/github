<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_JSON = '{"title":"Issue Event Milestone","required":["title"],"type":"object","properties":{"title":{"type":"string"}},"description":"Issue Event Milestone"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    public readonly string $title;
    public function __construct(string $title)
    {
        $this->title = $title;
    }
}
