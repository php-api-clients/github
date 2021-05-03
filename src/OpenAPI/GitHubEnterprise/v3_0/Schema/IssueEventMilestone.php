<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '0000000065dd6b1f000000006352672d';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private string $title;
    public function title() : string
    {
        return $this->title;
    }
}
