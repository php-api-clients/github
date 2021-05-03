<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SPL_HASH = '000000001ef8e228000000007fdcfded';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private ?object $billable = null;
    public function billable() : ?object
    {
        return $this->billable;
    }
}
