<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SPL_HASH = '00000000252f43990000000029de5079';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    private ?object $billable = null;
    private ?int $run_duration_ms = null;
    public function billable() : ?object
    {
        return $this->billable;
    }
    public function run_duration_ms() : ?int
    {
        return $this->run_duration_ms;
    }
}
