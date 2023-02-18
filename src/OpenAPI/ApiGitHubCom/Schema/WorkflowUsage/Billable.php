<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable\Ubuntu;

final readonly class Billable
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"UBUNTU":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"MACOS":{"type":"object","properties":{"total_ms":{"type":"integer"}}},"WINDOWS":{"type":"object","properties":{"total_ms":{"type":"integer"}}}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?Ubuntu $UBUNTU;
    public ?Ubuntu $MACOS;
    public ?Ubuntu $WINDOWS;

    public function __construct(Ubuntu $UBUNTU, Ubuntu $MACOS, Ubuntu $WINDOWS)
    {
        $this->UBUNTU  = $UBUNTU;
        $this->MACOS   = $MACOS;
        $this->WINDOWS = $WINDOWS;
    }
}
