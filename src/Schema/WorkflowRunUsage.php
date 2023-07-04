<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class WorkflowRunUsage
{
    public const SCHEMA_JSON         = '{"title":"Workflow Run Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}},"run_duration_ms":{"type":"integer"}},"description":"Workflow Run Usage"}';
    public const SCHEMA_TITLE        = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION  = 'Workflow Run Usage';
    public const SCHEMA_EXAMPLE_DATA = '{"billable":{"UBUNTU":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]},"MACOS":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]},"WINDOWS":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]}},"run_duration_ms":15}';

    public function __construct(public Schema\WorkflowRunUsage\Billable $billable, #[MapFrom('run_duration_ms')]
    public int|null $runDurationMs,)
    {
    }
}
