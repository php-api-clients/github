<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class SecurityAndAnalysis
{
    public const SCHEMA_JSON = '{"type":["object","null"],"properties":{"advanced_security":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}},"secret_scanning_push_protection":{"type":"object","properties":{"status":{"enum":["enabled","disabled"],"type":"string"}}}}}';
    public const SCHEMA_TITLE = 'security-and-analysis';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B $advanced_security;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B $secret_scanning;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B $secret_scanning_push_protection;
    public function advanced_security() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B
    {
        return $this->advanced_security;
    }
    public function secret_scanning() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B
    {
        return $this->secret_scanning;
    }
    public function secret_scanning_push_protection() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CBb00E1D05E9A25B294F90620Ec1A306B
    {
        return $this->secret_scanning_push_protection;
    }
}
