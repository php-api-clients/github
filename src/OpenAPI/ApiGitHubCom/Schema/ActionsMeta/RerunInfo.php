<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta;

final class RerunInfo
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}';
    public const SCHEMA_TITLE = 'ActionsMeta\\RerunInfo';
    public const SCHEMA_DESCRIPTION = '';
    private string $plan_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RerunInfo\JobIds>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RerunInfo\JobIds::class)
     */
    private array $job_ids = array();
    public function plan_id() : string
    {
        return $this->plan_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RerunInfo\JobIds>
     */
    public function job_ids() : array
    {
        return $this->job_ids;
    }
}
