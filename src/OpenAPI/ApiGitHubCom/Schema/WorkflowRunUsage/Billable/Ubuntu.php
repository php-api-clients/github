<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage\Billable;

final readonly class Ubuntu
{
    public const SCHEMA_JSON        = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_ms;
    public ?int $jobs;
    public array $job_runs;

    public function __construct(int $total_ms, int $jobs, array $job_runs)
    {
        $this->total_ms = $total_ms;
        $this->jobs     = $jobs;
        $this->job_runs = $job_runs;
    }
}
