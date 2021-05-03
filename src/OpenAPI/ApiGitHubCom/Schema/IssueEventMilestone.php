<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '0000000054d5e1ee0000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private string $title;
    public function title() : string
    {
        return $this->title;
    }
}
