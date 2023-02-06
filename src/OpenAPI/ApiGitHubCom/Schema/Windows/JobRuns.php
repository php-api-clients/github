<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows;

final class JobRuns
{
    public const SCHEMA_JSON = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'Windows\\JobRuns';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $job_id;
    public readonly int $duration_ms;
    public function __construct(int $job_id, int $duration_ms)
    {
        $this->job_id = $job_id;
        $this->duration_ms = $duration_ms;
    }
}
