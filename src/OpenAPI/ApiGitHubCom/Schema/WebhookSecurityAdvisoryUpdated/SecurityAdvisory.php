<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSecurityAdvisoryUpdated;

final class SecurityAdvisory
{
    public const SCHEMA_JSON = '{"required":["cvss","cwes","ghsa_id","summary","description","severity","identifiers","references","published_at","updated_at","withdrawn_at","vulnerabilities"],"type":"object","properties":{"cvss":{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}},"description":{"type":"string"},"ghsa_id":{"type":"string"},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}},"published_at":{"type":"string"},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}},"severity":{"type":"string"},"summary":{"type":"string"},"updated_at":{"type":"string"},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}},"withdrawn_at":{"type":["string","null"]}},"description":"The details of the security advisory, including summary, description, and severity."}';
    public const SCHEMA_TITLE = 'WebhookSecurityAdvisoryUpdated\\SecurityAdvisory';
    public const SCHEMA_DESCRIPTION = 'The details of the security advisory, including summary, description, and severity.';
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cvss $cvss;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cwes>
     */
    public readonly array $cwes;
    public readonly string $description;
    public readonly string $ghsa_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Identifiers>
     */
    public readonly array $identifiers;
    public readonly string $published_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\References>
     */
    public readonly array $references;
    public readonly string $severity;
    public readonly string $summary;
    public readonly string $updated_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Vulnerabilities>
     */
    public readonly array $vulnerabilities;
    public readonly ?string $withdrawn_at;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cwes> $cwes
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Identifiers> $identifiers
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\References> $references
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Vulnerabilities> $vulnerabilities
     */
    public function __construct(object $cvss, array $cwes, string $description, string $ghsa_id, array $identifiers, string $published_at, array $references, string $severity, string $summary, string $updated_at, array $vulnerabilities, string $withdrawn_at)
    {
        $this->cvss = $cvss;
        $this->cwes = $cwes;
        $this->description = $description;
        $this->ghsa_id = $ghsa_id;
        $this->identifiers = $identifiers;
        $this->published_at = $published_at;
        $this->references = $references;
        $this->severity = $severity;
        $this->summary = $summary;
        $this->updated_at = $updated_at;
        $this->vulnerabilities = $vulnerabilities;
        $this->withdrawn_at = $withdrawn_at;
    }
}
