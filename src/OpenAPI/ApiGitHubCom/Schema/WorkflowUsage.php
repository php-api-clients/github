<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SPL_HASH = '00000000729dcf7b00000000797f0b2e';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private ?object $billable = null;
    public function billable() : ?object
    {
        return $this->billable;
    }
}
