<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'security-and-analysis';
    public const SCHEMA_DESCRIPTION = '';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity $advanced_security;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning $secret_scanning;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection;
    public function __construct(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity $advanced_security, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning $secret_scanning, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection)
    {
        $this->advanced_security = $advanced_security;
        $this->secret_scanning = $secret_scanning;
        $this->secret_scanning_push_protection = $secret_scanning_push_protection;
    }
}
