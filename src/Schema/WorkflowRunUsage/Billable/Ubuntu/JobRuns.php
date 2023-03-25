<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class JobRuns
{
    public const SCHEMA_JSON = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"jobId":13,"durationMs":13}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('job_id')] public int $jobId, #[\EventSauce\ObjectHydrator\MapFrom('duration_ms')] public int $durationMs)
    {
    }
}
