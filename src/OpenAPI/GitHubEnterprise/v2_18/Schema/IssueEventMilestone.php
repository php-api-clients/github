<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '000000000c92e14c000000006ad867a6';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private ?string $title = null;
    public function title() : ?string
    {
        return $this->title;
    }
}
