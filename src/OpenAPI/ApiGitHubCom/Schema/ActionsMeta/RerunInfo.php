<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta;

final class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'ActionsMeta\\RerunInfo';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $plan_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RerunInfo\JobIds>
     */
    public readonly array $job_ids;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RerunInfo\JobIds> $job_ids
     */
    public function __construct(string $plan_id, array $job_ids)
    {
        $this->plan_id = $plan_id;
        $this->job_ids = $job_ids;
    }
}
