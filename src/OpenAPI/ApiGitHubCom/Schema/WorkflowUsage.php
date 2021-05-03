<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SPL_HASH = '000000000cd53dd90000000040effa88';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private ?object $billable = null;
    public function billable() : ?object
    {
        return $this->billable;
    }
}
