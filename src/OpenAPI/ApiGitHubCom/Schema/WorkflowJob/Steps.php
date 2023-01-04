<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob;

final class Steps
{
    public const SCHEMA_JSON = '{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending","waiting"],"type":"string"}}}';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    private $completed_at;
    private $conclusion;
    private string $name;
    private int $number;
    private $started_at;
    private string $status;
    public function completed_at()
    {
        return $this->completed_at;
    }
    public function conclusion()
    {
        return $this->conclusion;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function number() : int
    {
        return $this->number;
    }
    public function started_at()
    {
        return $this->started_at;
    }
    public function status() : string
    {
        return $this->status;
    }
}
