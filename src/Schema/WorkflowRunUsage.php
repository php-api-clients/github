<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final readonly class WorkflowRunUsage
{
    public const SCHEMA_JSON = '{"title":"Workflow Run Usage","required":["billable"],"type":"object","properties":{"billable":{"type":"object","properties":{"UBUNTU":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"MACOS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}},"WINDOWS":{"required":["total_ms","jobs"],"type":"object","properties":{"total_ms":{"type":"integer"},"jobs":{"type":"integer"},"job_runs":{"type":"array","items":{"required":["job_id","duration_ms"],"type":"object","properties":{"job_id":{"type":"integer"},"duration_ms":{"type":"integer"}}}}}}}},"run_duration_ms":{"type":"integer"}},"description":"Workflow Run Usage"}';
    public const SCHEMA_TITLE = 'Workflow Run Usage';
    public const SCHEMA_DESCRIPTION = 'Workflow Run Usage';
    public const SCHEMA_EXAMPLE_DATA = '{"billable":{"UBUNTU":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]},"MACOS":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]},"WINDOWS":{"total_ms":13,"jobs":13,"job_runs":[{"job_id":13,"duration_ms":13}]}},"run_duration_ms":13}';
    public function __construct(public Schema\WorkflowRunUsage\Billable $billable, #[\EventSauce\ObjectHydrator\MapFrom('run_duration_ms')] public ?int $runDurationMs)
    {
    }
}
