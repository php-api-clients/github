<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowUsage\Billable;

final readonly class Ubuntu
{
    public const SCHEMA_JSON        = '{"type":"object","properties":{"total_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE       = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?int $total_ms;

    public function __construct(int $total_ms)
    {
        $this->total_ms = $total_ms;
    }
}
