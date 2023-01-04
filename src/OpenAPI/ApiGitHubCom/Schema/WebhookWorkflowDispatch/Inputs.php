<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowDispatch;

final class Inputs
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"number":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'WebhookWorkflowDispatch\\Inputs';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $number;
    public function name() : string
    {
        return $this->name;
    }
    public function number() : string
    {
        return $this->number;
    }
}
