<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'security-and-analysis';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity $advanced_security;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning $secret_scanning;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection $secret_scanning_push_protection;
    public function advanced_security() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\AdvancedSecurity
    {
        return $this->advanced_security;
    }
    public function secret_scanning() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanning
    {
        return $this->secret_scanning;
    }
    public function secret_scanning_push_protection() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAndAnalysis\SecretScanningPushProtection
    {
        return $this->secret_scanning_push_protection;
    }
}
