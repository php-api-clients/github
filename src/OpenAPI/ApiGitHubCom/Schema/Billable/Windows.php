<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable;

final class Windows
{
    public const SCHEMA_JSON = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = 'Billable\\Windows';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $total_ms;
    public readonly int $jobs;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows\JobRuns>
     */
    public readonly array $job_runs;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows\JobRuns> $job_runs
     */
    public function __construct(int $total_ms, int $jobs, array $job_runs)
    {
        $this->total_ms = $total_ms;
        $this->jobs = $jobs;
        $this->job_runs = $job_runs;
    }
}
