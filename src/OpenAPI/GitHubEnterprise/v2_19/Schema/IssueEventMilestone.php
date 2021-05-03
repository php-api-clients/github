<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '000000005bc98b06000000002dbcf303';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private ?string $title = null;
    public function title() : ?string
    {
        return $this->title;
    }
}
