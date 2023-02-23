<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class DependabotAlert
{
    public const SCHEMA_JSON = '{"required":["number","state","dependency","security_advisory","security_vulnerability","url","html_url","created_at","updated_at","dismissed_at","dismissed_by","dismissed_reason","dismissed_comment","fixed_at"],"type":"object","properties":{"number":{"type":"integer","description":"The security alert number.","readOnly":true},"state":{"enum":["dismissed","fixed","open"],"type":"string","description":"The state of the Dependabot alert.","readOnly":true},"dependency":{"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"manifest_path":{"type":"string","description":"The full path to the dependency manifest file, relative to the root of the repository.","readOnly":true},"scope":{"enum":["development","runtime",null],"type":["string","null"],"description":"The execution scope of the vulnerable dependency.","readOnly":true}},"description":"Details for the vulnerable dependency.","readOnly":true},"security_advisory":{"required":["ghsa_id","cve_id","summary","description","vulnerabilities","severity","cvss","cwes","identifiers","references","published_at","updated_at","withdrawn_at"],"type":"object","properties":{"ghsa_id":{"type":"string","description":"The unique GitHub Security Advisory ID assigned to the advisory.","readOnly":true},"cve_id":{"type":["string","null"],"description":"The unique CVE ID assigned to the advisory.","readOnly":true},"summary":{"maxLength":1024,"type":"string","description":"A short, plain text summary of the advisory.","readOnly":true},"description":{"type":"string","description":"A long-form Markdown-supported description of the advisory.","readOnly":true},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"description":"Vulnerable version range information for the advisory.","readOnly":true},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the advisory.","readOnly":true},"cvss":{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false},"description":"Details for the advisory pertaining to Common Weakness Enumeration.","readOnly":true},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false},"description":"Values that identify this advisory among security information sources.","readOnly":true},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false},"description":"Links to additional advisory information.","readOnly":true},"published_at":{"type":"string","description":"The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"withdrawn_at":{"type":["string","null"],"description":"The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}},"description":"Details for the GitHub Security Advisory.","readOnly":true,"additionalProperties":false},"security_vulnerability":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_at":{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk",null],"type":["string","null"],"description":"The reason that the alert was dismissed."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"An optional comment associated with the alert\'s dismissal."},"fixed_at":{"type":["string","null"],"description":"The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}},"description":"A Dependabot alert.","additionalProperties":false}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'A Dependabot alert.';
    /**
     * The security alert number.
     */
    public ?int $number;
    /**
     * The state of the Dependabot alert.
     */
    public ?string $state;
    /**
     * Details for the vulnerable dependency.
     */
    public ?\ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency $dependency;
    /**
     * Details for the GitHub Security Advisory.
     */
    public ?\ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory $security_advisory;
    /**
     * Details pertaining to one vulnerable version range for the advisory.
     */
    public ?\ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability $security_vulnerability;
    /**
     * The REST API URL of the alert resource.
     */
    public ?string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    public ?string $html_url;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public ?string $created_at;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public ?string $updated_at;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public ?string $dismissed_at;
    public mixed $dismissed_by;
    /**
     * The reason that the alert was dismissed.
     */
    public ?string $dismissed_reason;
    /**
     * An optional comment associated with the alert's dismissal.
     */
    public ?string $dismissed_comment;
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public ?string $fixed_at;
    public function __construct(int $number, string $state, \ApiClients\Client\Github\Schema\DependabotAlertWithRepository\Dependency $dependency, \ApiClients\Client\Github\Schema\DependabotAlertSecurityAdvisory $security_advisory, \ApiClients\Client\Github\Schema\DependabotAlertSecurityVulnerability $security_vulnerability, string $url, string $html_url, string $created_at, string $updated_at, string $dismissed_at, mixed $dismissed_by, string $dismissed_reason, string $dismissed_comment, string $fixed_at)
    {
        $this->number = $number;
        $this->state = $state;
        $this->dependency = $dependency;
        $this->security_advisory = $security_advisory;
        $this->security_vulnerability = $security_vulnerability;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->dismissed_at = $dismissed_at;
        $this->dismissed_by = $dismissed_by;
        $this->dismissed_reason = $dismissed_reason;
        $this->dismissed_comment = $dismissed_comment;
        $this->fixed_at = $fixed_at;
    }
}
