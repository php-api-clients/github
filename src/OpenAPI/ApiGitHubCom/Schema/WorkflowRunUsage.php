<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    private array $billable = array();
    private ?int $run_duration_ms = null;
    public function billable() : array
    {
        return $this->billable;
    }
    public function run_duration_ms() : ?int
    {
        return $this->run_duration_ms;
    }
}
