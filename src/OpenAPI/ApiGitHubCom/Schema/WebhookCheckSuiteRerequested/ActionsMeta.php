<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteRerequested;

final class ActionsMeta
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_TITLE = 'WebhookCheckSuiteRerequested\\ActionsMeta';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta\RerunInfo::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta\RerunInfo $rerun_info;
    public function rerun_info() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta\RerunInfo
    {
        return $this->rerun_info;
    }
}
