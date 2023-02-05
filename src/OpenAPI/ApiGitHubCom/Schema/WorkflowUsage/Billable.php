<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage;

final class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = 'WorkflowUsage\\Billable';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Ubuntu $UBUNTU;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Macos $MACOS;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Billable\Windows $WINDOWS;
    public function __construct(object $UBUNTU, object $MACOS, object $WINDOWS)
    {
        $this->UBUNTU = $UBUNTU;
        $this->MACOS = $MACOS;
        $this->WINDOWS = $WINDOWS;
    }
}
