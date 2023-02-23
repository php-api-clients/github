<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookCheckSuiteRerequested\ActionsMeta;

final readonly class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $plan_id;
    public ?array $job_ids;
    public function __construct(string $plan_id, array $job_ids)
    {
        $this->plan_id = $plan_id;
        $this->job_ids = $job_ids;
    }
}
