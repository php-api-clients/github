<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookWorkflowDispatch;

final class Inputs
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"name":{"type":"string"},"number":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookWorkflowDispatch\\Inputs';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $name;
    public readonly string $number;
    public function __construct(string $name, string $number)
    {
        $this->name = $name;
        $this->number = $number;
    }
}
