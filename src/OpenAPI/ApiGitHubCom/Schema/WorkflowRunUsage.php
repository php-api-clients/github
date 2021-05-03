<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SPL_HASH = '0000000054d5e4e70000000071115dec';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    private object $billable;
    private int $run_duration_ms;
    public function billable() : object
    {
        return $this->billable;
    }
    public function run_duration_ms() : int
    {
        return $this->run_duration_ms;
    }
}
