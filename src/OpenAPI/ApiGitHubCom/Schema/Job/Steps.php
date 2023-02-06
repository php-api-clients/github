<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Job;

final class Steps
{
    public const SCHEMA_JSON = '{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}}';
    public const SCHEMA_EXAMPLE = '{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}';
    public const SCHEMA_TITLE = 'Job\\Steps';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public readonly string $status;
    /**
     * The outcome of the job.
     */
    public readonly ?string $conclusion;
    /**
     * The name of the job.
     */
    public readonly string $name;
    public readonly int $number;
    /**
     * The time that the step started, in ISO 8601 format.
     */
    public readonly ?string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public readonly ?string $completed_at;
    public function __construct(string $status, string $conclusion, string $name, int $number, string $started_at, string $completed_at)
    {
        $this->status = $status;
        $this->conclusion = $conclusion;
        $this->name = $name;
        $this->number = $number;
        $this->started_at = $started_at;
        $this->completed_at = $completed_at;
    }
}
