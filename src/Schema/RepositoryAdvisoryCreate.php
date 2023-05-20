<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryAdvisoryCreate
{
    public const SCHEMA_JSON         = '{"required":["summary","description","vulnerabilities"],"type":"object","properties":{"summary":{"maxLength":1024,"type":"string","description":"A short summary of the advisory."},"description":{"maxLength":65535,"type":"string","description":"A detailed description of what the advisory impacts."},"cve_id":{"type":["string","null"],"description":"The Common Vulnerabilities and Exposures (CVE) ID."},"vulnerabilities":{"type":"array","items":{"required":["package"],"type":"object","properties":{"package":{"required":["ecosystem"],"type":"object","properties":{"ecosystem":{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."},"name":{"type":["string","null"],"description":"The unique package name within its ecosystem."}},"description":"The name of the package affected by the vulnerability."},"vulnerable_version_range":{"type":["string","null"],"description":"The range of the package versions affected by the vulnerability."},"patched_versions":{"type":["string","null"],"description":"The package version(s) that resolve the vulnerability."},"vulnerable_functions":{"type":["array","null"],"items":{"type":"string"},"description":"The functions in the package that are affected."}},"additionalProperties":false},"description":"A product affected by the vulnerability detailed in a repository security advisory."},"cwe_ids":{"type":["array","null"],"items":{"type":"string"},"description":"A list of Common Weakness Enumeration (CWE) IDs."},"credits":{"type":["array","null"],"items":{"required":["login","type"],"type":"object","properties":{"login":{"type":"string","description":"The username of the user credited."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}},"additionalProperties":false},"description":"A list of users receiving credit for their participation in the security advisory."},"severity":{"enum":["critical","high","medium","low",null],"type":["string","null"],"description":"The severity of the advisory. You must choose between setting this field or `cvss_vector_string`."},"cvss_vector_string":{"type":["string","null"],"description":"The CVSS vector that calculates the severity of the advisory. You must choose between setting this field or `severity`."}},"additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = '';
    public const SCHEMA_EXAMPLE_DATA = '{"summary":"generated","description":"generated","cve_id":"generated","vulnerabilities":[{"package":{"ecosystem":"rubygems","name":"generated"},"vulnerable_version_range":"generated","patched_versions":"generated","vulnerable_functions":null},{"package":{"ecosystem":"rubygems","name":"generated"},"vulnerable_version_range":"generated","patched_versions":"generated","vulnerable_functions":null}],"cwe_ids":null,"credits":null,"severity":"low","cvss_vector_string":"generated"}';

    /**
     * summary: A short summary of the advisory.
     * description: A detailed description of what the advisory impacts.
     * cveId: The Common Vulnerabilities and Exposures (CVE) ID.
     * vulnerabilities: A product affected by the vulnerability detailed in a repository security advisory.
     * cweIds: A list of Common Weakness Enumeration (CWE) IDs.
     * credits: A list of users receiving credit for their participation in the security advisory.
     * severity: The severity of the advisory. You must choose between setting this field or `cvss_vector_string`.
     * cvssVectorString: The CVSS vector that calculates the severity of the advisory. You must choose between setting this field or `severity`.
     */
    public function __construct(public string $summary, public string $description, #[MapFrom('cve_id')] public ?string $cveId, public array $vulnerabilities, #[MapFrom('cwe_ids')] public ?array $cweIds, public ?array $credits, public ?string $severity, #[MapFrom('cvss_vector_string')] public ?string $cvssVectorString)
    {
    }
}
