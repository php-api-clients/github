<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WorkflowJob;

final class Steps
{
    public const SCHEMA_JSON = '{"title":"Workflow Step","required":["name","status","conclusion","number","started_at","completed_at"],"type":"object","properties":{"completed_at":{"type":["string","null"]},"conclusion":{"enum":["failure","skipped","success","cancelled",null],"type":["string","null"]},"name":{"type":"string"},"number":{"type":"integer"},"started_at":{"type":["string","null"]},"status":{"enum":["completed","in_progress","queued","pending","waiting"],"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Workflow Step';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $completed_at;
    public readonly ?string $conclusion;
    public readonly string $name;
    public readonly int $number;
    public readonly ?string $started_at;
    public readonly string $status;
    public function __construct(string $completed_at, string $conclusion, string $name, int $number, string $started_at, string $status)
    {
        $this->completed_at = $completed_at;
        $this->conclusion = $conclusion;
        $this->name = $name;
        $this->number = $number;
        $this->started_at = $started_at;
        $this->status = $status;
    }
}
