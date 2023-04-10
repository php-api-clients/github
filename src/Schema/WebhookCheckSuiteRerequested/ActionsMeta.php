<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class ActionsMeta
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"rerun_info":{"plan_id":"generated_plan_id_null","job_ids":["generated_job_ids_null"]}}';
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('rerun_info')] public ?Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo $rerunInfo)
    {
    }
}
