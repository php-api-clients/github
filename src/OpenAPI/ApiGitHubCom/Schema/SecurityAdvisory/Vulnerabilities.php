<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Vulnerabilities';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\FirstPatchedVersion::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\FirstPatchedVersion $first_patched_version;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\Package::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\Package $package;
    private string $severity;
    private string $vulnerable_version_range;
    public function first_patched_version() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\FirstPatchedVersion
    {
        return $this->first_patched_version;
    }
    public function package() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\Package
    {
        return $this->package;
    }
    public function severity() : string
    {
        return $this->severity;
    }
    public function vulnerable_version_range() : string
    {
        return $this->vulnerable_version_range;
    }
}
