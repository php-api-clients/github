<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested\ActionsMeta;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"plan_id":"generated_plan_id","job_ids":["generated_job_ids"]}';
    /**
     * @param ?array<string> $job_ids
     */
    public function __construct(public ?string $plan_id, public ?array $job_ids)
    {
    }
}
