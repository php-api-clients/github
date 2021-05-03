<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '0000000037ddbb650000000010a967e8';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private string $title;
    public function title() : string
    {
        return $this->title;
    }
}
