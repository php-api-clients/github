<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowRunUsage;

final class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WorkflowRunUsage\\Billable';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Ubuntu $UBUNTU;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Macos $MACOS;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Windows $WINDOWS;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Ubuntu $UBUNTU, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Macos $MACOS, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Windows $WINDOWS)
    {
        $this->UBUNTU = $UBUNTU;
        $this->MACOS = $MACOS;
        $this->WINDOWS = $WINDOWS;
    }
}
