<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE = 'Issue Event Milestone';
    public const SPL_HASH = '00000000252f46900000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private ?string $title = null;
    public function title() : ?string
    {
        return $this->title;
    }
}
