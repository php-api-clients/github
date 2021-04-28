<?php

namespace ApiClients\Client\Github\OpenAPI\Schema;

final class WorkflowUsage
{
    public const SCHEMA_TITLE = 'Workflow Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Usage';
    private object $billable;
    public function billable() : object
    {
        return $this->billable;
    }
}
