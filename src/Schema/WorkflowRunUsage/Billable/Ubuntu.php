<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Ubuntu
{
    public const SCHEMA_JSON = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"totalMs":13,"jobs":13,"jobRuns":[{"jobId":13,"durationMs":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns> $jobRuns
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_ms')] public int $totalMs, public int $jobs, #[\EventSauce\ObjectHydrator\MapFrom('job_runs')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns::class)] public ?array $jobRuns)
    {
    }
}
