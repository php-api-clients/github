<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory;

final class Vulnerabilities
{
    public const SCHEMA_JSON = '{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'SecurityAdvisory\\Vulnerabilities';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\FirstPatchedVersion $first_patched_version;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Vulnerabilities\Package $package;
    public readonly string $severity;
    public readonly string $vulnerable_version_range;
    public function __construct(object $first_patched_version, object $package, string $severity, string $vulnerable_version_range)
    {
        $this->first_patched_version = $first_patched_version;
        $this->package = $package;
        $this->severity = $severity;
        $this->vulnerable_version_range = $vulnerable_version_range;
    }
}
