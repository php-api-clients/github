<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WorkflowRunUsage;

final class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}}';
    public const SCHEMA_TITLE = 'WorkflowRunUsage\\Billable';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Ubuntu::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Ubuntu $UBUNTU;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Macos::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Macos $MACOS;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Windows::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Windows $WINDOWS;
    public function UBUNTU() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Ubuntu
    {
        return $this->UBUNTU;
    }
    public function MACOS() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Macos
    {
        return $this->MACOS;
    }
    public function WINDOWS() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Billable\Windows
    {
        return $this->WINDOWS;
    }
}
