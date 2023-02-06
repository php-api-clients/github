<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}},"description":"Workflow Usage"}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable $billable;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable $billable)
    {
        $this->billable = $billable;
    }
}
