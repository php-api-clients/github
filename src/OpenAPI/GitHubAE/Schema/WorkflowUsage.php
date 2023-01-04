<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WorkflowUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}},"description":"Workflow Usage"}';
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowUsage\Billable::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowUsage\Billable $billable;
    public function billable() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowUsage\Billable
    {
        return $this->billable;
    }
}
