<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSecurityAndAnalysis;

final class Changes
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"from":{"type":"object","properties":{"security_and_analysis":{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}}}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookSecurityAndAnalysis\\Changes';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\From $from;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Changes\From $from)
    {
        $this->from = $from;
    }
}
