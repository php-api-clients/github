<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema\WebhookCheckSuiteRerequested;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class ActionsMeta
{
    public const SCHEMA_JSON         = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"rerun_info":{"plan_id":"generated","job_ids":["generated","generated"]}}';

    public function __construct(#[MapFrom('rerun_info')]
    public Schema\WebhookCheckSuiteRerequested\ActionsMeta\RerunInfo|null $rerunInfo,)
    {
    }
}
