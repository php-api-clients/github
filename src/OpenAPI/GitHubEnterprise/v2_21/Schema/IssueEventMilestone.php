<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class IssueEventMilestone
{
    public const SCHEMA_TITLE       = 'Issue Event Milestone';
    public const SCHEMA_DESCRIPTION = 'Issue Event Milestone';
    private ?string $title          = null;

    public function title(): ?string
    {
        return $this->title;
    }
}
