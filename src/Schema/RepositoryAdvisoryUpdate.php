<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisoryUpdate\Credits;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisoryUpdate\Vulnerabilities;
use EventSauce\ObjectHydrator\MapFrom;
use EventSauce\ObjectHydrator\PropertyCasters\CastListToType;

final readonly class RepositoryAdvisoryUpdate
{
    public const SCHEMA_JSON         = '{"type":"object","properties":{"summary":{"maxLength":1024,"type":"string","description":"A short summary of the advisory."},"description":{"maxLength":65535,"type":"string","description":"A detailed description of what the advisory impacts."},"cve_id":{"type":["string","null"],"description":"The Common Vulnerabilities and Exposures (CVE) ID."},"vulnerabilities":{"type":"array","items":{"required":["package"],"type":"object","properties":{"package":{"required":["ecosystem"],"type":"object","properties":{"ecosystem":{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."},"name":{"type":["string","null"],"description":"The unique package name within its ecosystem."}},"description":"The name of the package affected by the vulnerability."},"vulnerable_version_range":{"type":["string","null"],"description":"The range of the package versions affected by the vulnerability."},"patched_versions":{"type":["string","null"],"description":"The package version(s) that resolve the vulnerability."},"vulnerable_functions":{"type":["array","null"],"items":{"type":"string"},"description":"The functions in the package that are affected."}},"additionalProperties":false},"description":"A product affected by the vulnerability detailed in a repository security advisory."},"cwe_ids":{"type":["array","null"],"items":{"type":"string"},"description":"A list of Common Weakness Enumeration (CWE) IDs."},"credits":{"type":["array","null"],"items":{"required":["login","type"],"type":"object","properties":{"login":{"type":"string","description":"The username of the user credited."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}},"additionalProperties":false},"description":"A list of users receiving credit for their participation in the security advisory."},"severity":{"enum":["critical","high","medium","low",null],"type":["string","null"],"description":"The severity of the advisory. You must choose between setting this field or `cvss_vector_string`."},"cvss_vector_string":{"type":["string","null"],"description":"The CVSS vector that calculates the severity of the advisory. You must choose between setting this field or `severity`."},"state":{"enum":["published","closed","draft"],"type":"string","description":"The state of the advisory."}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"summary":"generated_summary_null","description":"generated_description_null","cve_id":"generated_cve_id_null","vulnerabilities":[{"package":{"ecosystem":"rubygems","name":"generated_name_null"},"vulnerable_version_range":"generated_vulnerable_version_range_null","patched_versions":"generated_patched_versions_null","vulnerable_functions":["generated_vulnerable_functions_null"]}],"cwe_ids":["generated_cwe_ids_null"],"credits":[{"login":"generated_login_null","type":"analyst"}],"severity":"critical","cvss_vector_string":"generated_cvss_vector_string_null","state":"published"}';

    /**
     * summary: A short summary of the advisory.
     * description: A detailed description of what the advisory impacts.
     * cveId: The Common Vulnerabilities and Exposures (CVE) ID.
     * vulnerabilities: A product affected by the vulnerability detailed in a repository security advisory.
     *
     * @param ?array<Vulnerabilities> $vulnerabilities cweIds: A list of Common Weakness Enumeration (CWE) IDs.
     * @param ?array<string>          $cweIds
     * credits: A list of users receiving credit for their participation in the security advisory.
     * @param ?array<Credits>         $credits         severity: The severity of the advisory. You must choose between setting this field or `cvss_vector_string`.
     *                 cvssVectorString: The CVSS vector that calculates the severity of the advisory. You must choose between setting this field or `severity`.
     *                 state: The state of the advisory.
     */
    public function __construct(public ?string $summary, public ?string $description, #[MapFrom('cve_id')] public ?string $cveId, #[CastListToType(Schema\RepositoryAdvisoryUpdate\Vulnerabilities::class)] public ?array $vulnerabilities, #[MapFrom('cwe_ids')] public ?array $cweIds, #[CastListToType(Schema\RepositoryAdvisoryUpdate\Credits::class)] public ?array $credits, public ?string $severity, #[MapFrom('cvss_vector_string')] public ?string $cvssVectorString, public ?string $state)
    {
    }
}
