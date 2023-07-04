<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\Job;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class Steps
{
    public const SCHEMA_JSON         = '{"required":["name","status","conclusion","number"],"type":"object","properties":{"status":{"enum":["queued","in_progress","completed"],"type":"string","description":"The phase of the lifecycle that the job is currently in.","examples":["queued"]},"conclusion":{"type":["string","null"],"description":"The outcome of the job.","examples":["success"]},"name":{"type":"string","description":"The name of the job.","examples":["test-coverage"]},"number":{"type":"integer","examples":[1]},"started_at":{"type":["string","null"],"description":"The time that the step started, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]},"completed_at":{"type":["string","null"],"description":"The time that the job finished, in ISO 8601 format.","format":"date-time","examples":["2019-08-08T08:00:00-07:00"]}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"status":"queued","conclusion":"success","name":"test-coverage","number":1,"started_at":"2019-08-08T08:00:00-07:00","completed_at":"2019-08-08T08:00:00-07:00"}';

    /**
     * status: The phase of the lifecycle that the job is currently in.
     * conclusion: The outcome of the job.
     * name: The name of the job.
     * startedAt: The time that the step started, in ISO 8601 format.
     * completedAt: The time that the job finished, in ISO 8601 format.
     */
    public function __construct(public string $status, public string|null $conclusion, public string $name, public int $number, #[MapFrom('started_at')]
    public string|null $startedAt, #[MapFrom('completed_at')]
    public string|null $completedAt,)
    {
    }
}
