<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C1D83C8699Ba8906Fe0F191591Da08Daa
{
    public const SCHEMA_JSON = '{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}}';
    public const SCHEMA_TITLE = 'c_1d83c8699ba8906fe0f191591da08daa';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    private string $status;
    /**
     * The outcome of the job.
     */
    private $conclusion;
    /**
     * The name of the job.
     */
    private string $name;
    private int $number;
    /**
     * The time that the step started, in ISO 8601 format.
     */
    private $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    private $completed_at;
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public function status() : string
    {
        return $this->status;
    }
    /**
     * The outcome of the job.
     */
    public function conclusion()
    {
        return $this->conclusion;
    }
    /**
     * The name of the job.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function number() : int
    {
        return $this->number;
    }
    /**
     * The time that the step started, in ISO 8601 format.
     */
    public function started_at()
    {
        return $this->started_at;
    }
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public function completed_at()
    {
        return $this->completed_at;
    }
}
