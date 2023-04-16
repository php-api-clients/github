<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
abstract readonly class Abstract6cef235c04d453d8d14aaceb20bf342c
{
    public const SCHEMA_JSON = '{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns> $jobRuns
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('total_ms')] public int $totalMs, public int $jobs, #[\EventSauce\ObjectHydrator\MapFrom('job_runs')] #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WorkflowRunUsage\Billable\Ubuntu\JobRuns::class)] public ?array $jobRuns)
    {
    }
}
