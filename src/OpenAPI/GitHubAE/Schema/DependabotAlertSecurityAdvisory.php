<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class DependabotAlertSecurityAdvisory
{
    public const SCHEMA_TITLE = 'dependabot-alert-security-advisory';
    public const SCHEMA_DESCRIPTION = 'Details for the GitHub Security Advisory.';
    /**
     * The unique GitHub Security Advisory ID assigned to the advisory.
     */
    private string $ghsa_id;
    /**
     * The unique CVE ID assigned to the advisory.
     */
    private $cve_id;
    /**
     * A short, plain text summary of the advisory.
     */
    private string $summary;
    /**
     * A long-form Markdown-supported description of the advisory.
     */
    private string $description;
    /**
     * Vulnerable version range information for the advisory.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityVulnerability>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityVulnerability::class)
     */
    private array $vulnerabilities = array();
    /**
     * The severity of the advisory.
     */
    private string $severity;
    /**
     * Details for the advisory pertaining to the Common Vulnerability Scoring System.
     */
    private array $cvss = array();
    /**
     * Details for the advisory pertaining to Common Weakness Enumeration.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Cwes>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Cwes::class)
     */
    private array $cwes = array();
    /**
     * Values that identify this advisory among security information sources.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Identifiers>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Identifiers::class)
     */
    private array $identifiers = array();
    /**
     * Links to additional advisory information.
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\References>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\References::class)
     */
    private array $references = array();
    /**
     * The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $published_at;
    /**
     * The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $updated_at;
    /**
     * The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private $withdrawn_at;
    /**
     * The unique GitHub Security Advisory ID assigned to the advisory.
     */
    public function ghsa_id() : string
    {
        return $this->ghsa_id;
    }
    /**
     * The unique CVE ID assigned to the advisory.
     */
    public function cve_id()
    {
        return $this->cve_id;
    }
    /**
     * A short, plain text summary of the advisory.
     */
    public function summary() : string
    {
        return $this->summary;
    }
    /**
     * A long-form Markdown-supported description of the advisory.
     */
    public function description() : string
    {
        return $this->description;
    }
    /**
     * Vulnerable version range information for the advisory.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityVulnerability>
     */
    public function vulnerabilities() : array
    {
        return $this->vulnerabilities;
    }
    /**
     * The severity of the advisory.
     */
    public function severity() : string
    {
        return $this->severity;
    }
    /**
     * Details for the advisory pertaining to the Common Vulnerability Scoring System.
     */
    public function cvss() : array
    {
        return $this->cvss;
    }
    /**
     * Details for the advisory pertaining to Common Weakness Enumeration.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Cwes>
     */
    public function cwes() : array
    {
        return $this->cwes;
    }
    /**
     * Values that identify this advisory among security information sources.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\Identifiers>
     */
    public function identifiers() : array
    {
        return $this->identifiers;
    }
    /**
     * Links to additional advisory information.
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\DependabotAlertSecurityAdvisory\References>
     */
    public function references() : array
    {
        return $this->references;
    }
    /**
     * The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function published_at() : string
    {
        return $this->published_at;
    }
    /**
     * The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function withdrawn_at()
    {
        return $this->withdrawn_at;
    }
}
