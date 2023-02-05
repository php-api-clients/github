<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotAlertSecurityAdvisory
{
    public const SCHEMA_JSON = '{"required":["ghsa_id","cve_id","summary","description","vulnerabilities","severity","cvss","cwes","identifiers","references","published_at","updated_at","withdrawn_at"],"type":"object","properties":{"ghsa_id":{"type":"string","description":"The unique GitHub Security Advisory ID assigned to the advisory.","readOnly":true},"cve_id":{"type":["string","null"],"description":"The unique CVE ID assigned to the advisory.","readOnly":true},"summary":{"maxLength":1024,"type":"string","description":"A short, plain text summary of the advisory.","readOnly":true},"description":{"type":"string","description":"A long-form Markdown-supported description of the advisory.","readOnly":true},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"description":"Vulnerable version range information for the advisory.","readOnly":true},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the advisory.","readOnly":true},"cvss":{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false},"description":"Details for the advisory pertaining to Common Weakness Enumeration.","readOnly":true},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false},"description":"Values that identify this advisory among security information sources.","readOnly":true},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false},"description":"Links to additional advisory information.","readOnly":true},"published_at":{"type":"string","description":"The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"withdrawn_at":{"type":["string","null"],"description":"The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}},"description":"Details for the GitHub Security Advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = 'dependabot-alert-security-advisory';
    public const SCHEMA_DESCRIPTION = 'Details for the GitHub Security Advisory.';
    /**
     * The unique GitHub Security Advisory ID assigned to the advisory.
     */
    public readonly string $ghsa_id;
    /**
     * The unique CVE ID assigned to the advisory.
     */
    public readonly ?string $cve_id;
    /**
     * A short, plain text summary of the advisory.
     */
    public readonly string $summary;
    /**
     * A long-form Markdown-supported description of the advisory.
     */
    public readonly string $description;
    /**
     * Vulnerable version range information for the advisory.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability>
     */
    public readonly array $vulnerabilities;
    /**
     * The severity of the advisory.
     */
    public readonly string $severity;
    /**
     * Details for the advisory pertaining to the Common Vulnerability Scoring System.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\Cvss $cvss;
    /**
     * Details for the advisory pertaining to Common Weakness Enumeration.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\Cwes>
     */
    public readonly array $cwes;
    /**
     * Values that identify this advisory among security information sources.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\Identifiers>
     */
    public readonly array $identifiers;
    /**
     * Links to additional advisory information.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\References>
     */
    public readonly array $references;
    /**
     * The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $published_at;
    /**
     * The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly string $updated_at;
    /**
     * The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public readonly ?string $withdrawn_at;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability> $vulnerabilities
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\Cwes> $cwes
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\Identifiers> $identifiers
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory\References> $references
     */
    public function __construct(string $ghsa_id, string $cve_id, string $summary, string $description, array $vulnerabilities, string $severity, object $cvss, array $cwes, array $identifiers, array $references, string $published_at, string $updated_at, string $withdrawn_at)
    {
        $this->ghsa_id = $ghsa_id;
        $this->cve_id = $cve_id;
        $this->summary = $summary;
        $this->description = $description;
        $this->vulnerabilities = $vulnerabilities;
        $this->severity = $severity;
        $this->cvss = $cvss;
        $this->cwes = $cwes;
        $this->identifiers = $identifiers;
        $this->references = $references;
        $this->published_at = $published_at;
        $this->updated_at = $updated_at;
        $this->withdrawn_at = $withdrawn_at;
    }
}
