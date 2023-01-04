<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Windows;

final class JobRuns
{
    public const SCHEMA_JSON = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = 'Windows\\JobRuns';
    public const SCHEMA_DESCRIPTION = '';
    private int $job_id;
    private int $duration_ms;
    public function job_id() : int
    {
        return $this->job_id;
    }
    public function duration_ms() : int
    {
        return $this->duration_ms;
    }
}
