<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WorkflowRunUsage\Billable\Ubuntu;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class JobRuns
{
    public const SCHEMA_JSON         = '{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"job_id":6,"duration_ms":11}';

    public function __construct(#[MapFrom('job_id')] public int $jobId, #[MapFrom('duration_ms')] public int $durationMs)
    {
    }
}
