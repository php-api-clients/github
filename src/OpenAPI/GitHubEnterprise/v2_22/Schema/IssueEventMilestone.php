<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '00000000269f20fe00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private ?string $title = null;
    public function title() : ?string
    {
        return $this->title;
    }
}
