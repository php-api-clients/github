<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SPL_HASH = '0000000020701c510000000042193899';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private object $billable;
    public function billable() : object
    {
        return $this->billable;
    }
}
