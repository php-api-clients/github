<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WorkflowRunUsage
{
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SPL_HASH = '000000007ee6e9e70000000021479ea3';
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
