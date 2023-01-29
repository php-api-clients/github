<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'security-and-analysis';
    public const SCHEMA_DESCRIPTION = '';
    public readonly array $advanced_security;
    public readonly array $secret_scanning;
    public readonly array $secret_scanning_push_protection;
    public function __construct(array $advanced_security, array $secret_scanning, array $secret_scanning_push_protection)
    {
        $this->advanced_security = $advanced_security;
        $this->secret_scanning = $secret_scanning;
        $this->secret_scanning_push_protection = $secret_scanning_push_protection;
    }
}
