<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WorkflowRunUsage;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Billable
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"UBUNTU":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]},"MACOS":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]},"WINDOWS":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]}}';
    public function __construct(public ?Schema\WorkflowRunUsage\Billable\Ubuntu $UBUNTU, public ?Schema\WorkflowRunUsage\Billable\Ubuntu $MACOS, public ?Schema\WorkflowRunUsage\Billable\Ubuntu $WINDOWS)
    {
    }
}
