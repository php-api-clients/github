<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private string $title;
    public function title() : string
    {
        return $this->title;
    }
}