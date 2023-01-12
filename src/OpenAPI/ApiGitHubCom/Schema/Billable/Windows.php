<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable;

final class Windows
{
    public const SCHEMA_JSON = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = 'Billable\\Windows';
    public const SCHEMA_DESCRIPTION = '';
    private int $total_ms;
    private int $jobs;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows\JobRuns>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows\JobRuns::class)
     */
    private array $job_runs = array();
    public function total_ms() : int
    {
        return $this->total_ms;
    }
    public function jobs() : int
    {
        return $this->jobs;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows\JobRuns>
     */
    public function job_runs() : array
    {
        return $this->job_runs;
    }
}
