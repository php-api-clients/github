<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Run Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}},"run_duration_ms":{"type":"integer"}},"description":"Workflow Run Usage"}';
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable $billable;
    private ?int $run_duration_ms = null;
    public function billable() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable
    {
        return $this->billable;
    }
    public function run_duration_ms() : ?int
    {
        return $this->run_duration_ms;
    }
}
