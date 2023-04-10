<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class DependabotAlertSecurityAdvisory
{
    public const SCHEMA_JSON = '{"required":["ghsa_id","cve_id","summary","description","vulnerabilities","severity","cvss","cwes","identifiers","references","published_at","updated_at","withdrawn_at"],"type":"object","properties":{"ghsa_id":{"type":"string","description":"The unique GitHub Security Advisory ID assigned to the advisory.","readOnly":true},"cve_id":{"type":["string","null"],"description":"The unique CVE ID assigned to the advisory.","readOnly":true},"summary":{"maxLength":1024,"type":"string","description":"A short, plain text summary of the advisory.","readOnly":true},"description":{"type":"string","description":"A long-form Markdown-supported description of the advisory.","readOnly":true},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"description":"Vulnerable version range information for the advisory.","readOnly":true},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the advisory.","readOnly":true},"cvss":{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false},"description":"Details for the advisory pertaining to Common Weakness Enumeration.","readOnly":true},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false},"description":"Values that identify this advisory among security information sources.","readOnly":true},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false},"description":"Links to additional advisory information.","readOnly":true},"published_at":{"type":"string","description":"The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"withdrawn_at":{"type":["string","null"],"description":"The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}},"description":"Details for the GitHub Security Advisory.","readOnly":true,"additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'Details for the GitHub Security Advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{"ghsa_id":"generated_ghsa_id_null","cve_id":"generated_cve_id_null","summary":"generated_summary_null","description":"generated_description_null","vulnerabilities":[{"package":{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"},"severity":"low","vulnerable_version_range":"generated_vulnerable_version_range_null","first_patched_version":{"identifier":"generated_identifier_null"}}],"severity":"low","cvss":{"score":13.13,"vector_string":"generated_vector_string_null"},"cwes":[{"cwe_id":"generated_cwe_id_null","name":"generated_name_null"}],"identifiers":[{"type":"CVE","value":"generated_value_null"}],"references":[{"url":"https:\\/\\/example.com\\/"}],"published_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","withdrawn_at":"1970-01-01T00:00:00+00:00"}';
    /**
     * ghsaId: The unique GitHub Security Advisory ID assigned to the advisory.
     * cveId: The unique CVE ID assigned to the advisory.
     * summary: A short, plain text summary of the advisory.
     * description: A long-form Markdown-supported description of the advisory.
     * vulnerabilities: Vulnerable version range information for the advisory.
     * @param array<\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability> $vulnerabilities
     * severity: The severity of the advisory.
     * cvss: Details for the advisory pertaining to the Common Vulnerability Scoring System.
     * cwes: Details for the advisory pertaining to Common Weakness Enumeration.
     * @param array<\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Cwes> $cwes
     * identifiers: Values that identify this advisory among security information sources.
     * @param array<\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\Identifiers> $identifiers
     * references: Links to additional advisory information.
     * @param array<\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory\References> $references
     * publishedAt: The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * updatedAt: The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     * withdrawnAt: The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('ghsa_id')] public string $ghsaId, #[\EventSauce\ObjectHydrator\MapFrom('cve_id')] public ?string $cveId, public string $summary, public string $description, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependabotAlertSecurityVulnerability::class)] public array $vulnerabilities, public string $severity, public Schema\DependabotAlertSecurityAdvisory\Cvss $cvss, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependabotAlertSecurityAdvisory\Cwes::class)] public array $cwes, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependabotAlertSecurityAdvisory\Identifiers::class)] public array $identifiers, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\DependabotAlertSecurityAdvisory\References::class)] public array $references, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public string $publishedAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\MapFrom('withdrawn_at')] public ?string $withdrawnAt)
    {
    }
}