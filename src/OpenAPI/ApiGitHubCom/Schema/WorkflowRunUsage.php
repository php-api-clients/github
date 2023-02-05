<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Run Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}},"run_duration_ms":{"type":"integer"}},"description":"Workflow Run Usage"}';
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable $billable;
    public readonly ?int $run_duration_ms;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable $billable, int $run_duration_ms)
    {
        $this->billable = $billable;
        $this->run_duration_ms = $run_duration_ms;
    }
}
