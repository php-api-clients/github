<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookSecurityAdvisoryUpdated;

final class SecurityAdvisory
{
    public const SCHEMA_JSON = '{"required":["cvss","cwes","ghsa_id","summary","description","severity","identifiers","references","published_at","updated_at","withdrawn_at","vulnerabilities"],"type":"object","properties":{"cvss":{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}},"description":{"type":"string"},"ghsa_id":{"type":"string"},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}},"published_at":{"type":"string"},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}},"severity":{"type":"string"},"summary":{"type":"string"},"updated_at":{"type":"string"},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}},"withdrawn_at":{"type":["string","null"]}},"description":"The details of the security advisory, including summary, description, and severity."}';
    public const SCHEMA_TITLE = 'WebhookSecurityAdvisoryUpdated\\SecurityAdvisory';
    public const SCHEMA_DESCRIPTION = 'The details of the security advisory, including summary, description, and severity.';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cvss::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cvss $cvss;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cwes>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cwes::class)
     */
    private array $cwes = array();
    private string $description;
    private string $ghsa_id;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Identifiers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Identifiers::class)
     */
    private array $identifiers = array();
    private string $published_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\References>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\References::class)
     */
    private array $references = array();
    private string $severity;
    private string $summary;
    private string $updated_at;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Vulnerabilities>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Vulnerabilities::class)
     */
    private array $vulnerabilities = array();
    private ?string $withdrawn_at;
    public function cvss() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cvss
    {
        return $this->cvss;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Cwes>
     */
    public function cwes() : array
    {
        return $this->cwes;
    }
    public function description() : string
    {
        return $this->description;
    }
    public function ghsa_id() : string
    {
        return $this->ghsa_id;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Identifiers>
     */
    public function identifiers() : array
    {
        return $this->identifiers;
    }
    public function published_at() : string
    {
        return $this->published_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\References>
     */
    public function references() : array
    {
        return $this->references;
    }
    public function severity() : string
    {
        return $this->severity;
    }
    public function summary() : string
    {
        return $this->summary;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SecurityAdvisory\Vulnerabilities>
     */
    public function vulnerabilities() : array
    {
        return $this->vulnerabilities;
    }
    public function withdrawn_at() : ?string
    {
        return $this->withdrawn_at;
    }
}
