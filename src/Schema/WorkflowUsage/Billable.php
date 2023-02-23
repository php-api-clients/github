<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WorkflowUsage;

final readonly class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?\ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $UBUNTU;
    public ?\ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $MACOS;
    public ?\ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $WINDOWS;
    public function __construct(\ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $UBUNTU, \ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $MACOS, \ApiClients\Client\Github\Schema\WorkflowUsage\Billable\Ubuntu $WINDOWS)
    {
        $this->UBUNTU = $UBUNTU;
        $this->MACOS = $MACOS;
        $this->WINDOWS = $WINDOWS;
    }
}
