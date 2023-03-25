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
    public const SCHEMA_EXAMPLE_DATA = '{"planId":"generated_plan_id_null","jobIds":["generated_job_ids_null"]}';
    /**
     * @param ?array<string> $jobIds
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('plan_id')] public ?string $planId, #[\EventSauce\ObjectHydrator\MapFrom('job_ids')] public ?array $jobIds)
    {
    }
}
