<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class WorkflowDashStepDashInProgress
{
    public const SCHEMA_TITLE = 'Workflow Step (In Progress)';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $status;
    private $conclusion;
    private int $number;
    private string $started_at;
    private $completed_at;
    public function name() : string
    {
        return $this->name;
    }
    public function status() : string
    {
        return $this->status;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function started_at() : string
    {
        return $this->started_at;
    }
    public function completed_at()
    {
        return $this->completed_at;
    }
}
