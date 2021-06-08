<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE       = 'Workflow Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private array $billable         = [];

    public function billable(): array
    {
        return $this->billable;
    }
}
