<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WorkflowRunUsage;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Billable
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]},"MACOS":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]},"WINDOWS":{"total_ms":8,"jobs":4,"job_runs":[{"job_id":6,"duration_ms":11},{"job_id":6,"duration_ms":11}]}}';

    public function __construct(#[MapFrom('UBUNTU')] public ?Schema\WorkflowRunUsage\Billable\Ubuntu $ubuntu, #[MapFrom('MACOS')] public ?Schema\WorkflowRunUsage\Billable\Ubuntu $macos, #[MapFrom('WINDOWS')] public ?Schema\WorkflowRunUsage\Billable\Ubuntu $windows)
    {
    }
}
