<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookCheckSuiteRerequested;

final class ActionsMeta
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"rerun_info":{"type":"object","properties":{"plan_id":{"type":"string"},"job_ids":{"type":"array","items":{"type":"string"}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookCheckSuiteRerequested\\ActionsMeta';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta\RerunInfo $rerun_info;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ActionsMeta\RerunInfo $rerun_info)
    {
        $this->rerun_info = $rerun_info;
    }
}
