<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema\Job;

final class Steps
{
    public const SCHEMA_TITLE       = 'job::steps';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The phase of the lifecycle that the job is currently in.
     */
    private string $status;
    /**
     * The outcome of the job.
     */
    private string $conclusion;
    /**
     * The name of the job.
     */
    private string $name;
    private int $number;
    /**
     * The time that the step started, in ISO 8601 format.
     */
    private string $started_at;
    /**
     * The time that the job finished, in ISO 8601 format.
     */
    private string $completed_at;

    /**
     * The phase of the lifecycle that the job is currently in.
     */
    public function status(): string
    {
        return $this->status;
    }

    /**
     * The outcome of the job.
     */
    public function conclusion(): string
    {
        return $this->conclusion;
    }

    /**
     * The name of the job.
     */
    public function name(): string
    {
        return $this->name;
    }

    public function number(): int
    {
        return $this->number;
    }

    /**
     * The time that the step started, in ISO 8601 format.
     */
    public function started_at(): string
    {
        return $this->started_at;
    }

    /**
     * The time that the job finished, in ISO 8601 format.
     */
    public function completed_at(): string
    {
        return $this->completed_at;
    }
}
