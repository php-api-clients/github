<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class DependabotAlertWithRepository
{
    public const SCHEMA_JSON = '{"required":["number","state","dependency","security_advisory","security_vulnerability","url","html_url","created_at","updated_at","dismissed_at","dismissed_by","dismissed_reason","dismissed_comment","fixed_at","repository"],"type":"object","properties":{"number":{"type":"integer","description":"The security alert number.","readOnly":true},"state":{"enum":["dismissed","fixed","open"],"type":"string","description":"The state of the Dependabot alert.","readOnly":true},"dependency":{"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"manifest_path":{"type":"string","description":"The full path to the dependency manifest file, relative to the root of the repository.","readOnly":true},"scope":{"enum":["development","runtime",null],"type":["string","null"],"description":"The execution scope of the vulnerable dependency.","readOnly":true}},"description":"Details for the vulnerable dependency.","readOnly":true},"security_advisory":{"required":["ghsa_id","cve_id","summary","description","vulnerabilities","severity","cvss","cwes","identifiers","references","published_at","updated_at","withdrawn_at"],"type":"object","properties":{"ghsa_id":{"type":"string","description":"The unique GitHub Security Advisory ID assigned to the advisory.","readOnly":true},"cve_id":{"type":["string","null"],"description":"The unique CVE ID assigned to the advisory.","readOnly":true},"summary":{"maxLength":1024,"type":"string","description":"A short, plain text summary of the advisory.","readOnly":true},"description":{"type":"string","description":"A long-form Markdown-supported description of the advisory.","readOnly":true},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"description":"Vulnerable version range information for the advisory.","readOnly":true},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the advisory.","readOnly":true},"cvss":{"required":["score","vector_string"],"type":"object","properties":{"score":{"maximum":10,"minimum":0,"type":"number","description":"The overall CVSS score of the advisory.","readOnly":true},"vector_string":{"type":["string","null"],"description":"The full CVSS vector string for the advisory.","readOnly":true}},"description":"Details for the advisory pertaining to the Common Vulnerability Scoring System.","readOnly":true,"additionalProperties":false},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The unique CWE ID.","readOnly":true},"name":{"type":"string","description":"The short, plain text name of the CWE.","readOnly":true}},"description":"A CWE weakness assigned to the advisory.","readOnly":true,"additionalProperties":false},"description":"Details for the advisory pertaining to Common Weakness Enumeration.","readOnly":true},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of advisory identifier.","readOnly":true},"value":{"type":"string","description":"The value of the advisory identifer.","readOnly":true}},"description":"An advisory identifier.","readOnly":true,"additionalProperties":false},"description":"Values that identify this advisory among security information sources.","readOnly":true},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","description":"The URL of the reference.","format":"uri","readOnly":true}},"description":"A link to additional advisory information.","readOnly":true,"additionalProperties":false},"description":"Links to additional advisory information.","readOnly":true},"published_at":{"type":"string","description":"The time that the advisory was published in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the advisory was last modified in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"withdrawn_at":{"type":["string","null"],"description":"The time that the advisory was withdrawn in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true}},"description":"Details for the GitHub Security Advisory.","readOnly":true,"additionalProperties":false},"security_vulnerability":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string","description":"The package\'s language or package management ecosystem.","readOnly":true},"name":{"type":"string","description":"The unique package name within its ecosystem.","readOnly":true}},"description":"Details for the vulnerable package.","readOnly":true,"additionalProperties":false},"severity":{"enum":["low","medium","high","critical"],"type":"string","description":"The severity of the vulnerability.","readOnly":true},"vulnerable_version_range":{"type":"string","description":"Conditions that identify vulnerable versions of this vulnerability\'s package.","readOnly":true},"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string","description":"The package version that patches this vulnerability.","readOnly":true}},"description":"Details pertaining to the package version that patches this vulnerability.","readOnly":true,"additionalProperties":false}},"description":"Details pertaining to one vulnerable version range for the advisory.","readOnly":true,"additionalProperties":false},"url":{"type":"string","description":"The REST API URL of the alert resource.","format":"uri","readOnly":true},"html_url":{"type":"string","description":"The GitHub URL of the alert resource.","format":"uri","readOnly":true},"created_at":{"type":"string","description":"The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"updated_at":{"type":"string","description":"The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_at":{"type":["string","null"],"description":"The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"dismissed_by":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"dismissed_reason":{"enum":["fix_started","inaccurate","no_bandwidth","not_used","tolerable_risk",null],"type":["string","null"],"description":"The reason that the alert was dismissed."},"dismissed_comment":{"maxLength":280,"type":["string","null"],"description":"An optional comment associated with the alert\'s dismissal."},"fixed_at":{"type":["string","null"],"description":"The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.","format":"date-time","readOnly":true},"repository":{"title":"Simple Repository","required":["archive_url","assignees_url","blobs_url","branches_url","collaborators_url","comments_url","commits_url","compare_url","contents_url","contributors_url","deployments_url","description","downloads_url","events_url","fork","forks_url","full_name","git_commits_url","git_refs_url","git_tags_url","hooks_url","html_url","id","node_id","issue_comment_url","issue_events_url","issues_url","keys_url","labels_url","languages_url","merges_url","milestones_url","name","notifications_url","owner","private","pulls_url","releases_url","stargazers_url","statuses_url","subscribers_url","subscription_url","tags_url","teams_url","trees_url","url"],"type":"object","properties":{"id":{"type":"integer","description":"A unique identifier of the repository.","examples":[1296269]},"node_id":{"type":"string","description":"The GraphQL identifier of the repository.","examples":["MDEwOlJlcG9zaXRvcnkxMjk2MjY5"]},"name":{"type":"string","description":"The name of the repository.","examples":["Hello-World"]},"full_name":{"type":"string","description":"The full, globally unique, name of the repository.","examples":["octocat\\/Hello-World"]},"owner":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"private":{"type":"boolean","description":"Whether the repository is private."},"html_url":{"type":"string","description":"The URL to view the repository on GitHub.com.","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World"]},"description":{"type":["string","null"],"description":"The repository description.","examples":["This your first repo!"]},"fork":{"type":"boolean","description":"Whether the repository is a fork."},"url":{"type":"string","description":"The URL to get more information about the repository from the GitHub API.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World"]},"archive_url":{"type":"string","description":"A template for the API URL to download the repository as an archive.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/{archive_format}{\\/ref}"]},"assignees_url":{"type":"string","description":"A template for the API URL to list the available assignees for issues in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/assignees{\\/user}"]},"blobs_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git blob in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/blobs{\\/sha}"]},"branches_url":{"type":"string","description":"A template for the API URL to get information about branches in the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/branches{\\/branch}"]},"collaborators_url":{"type":"string","description":"A template for the API URL to get information about collaborators of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/collaborators{\\/collaborator}"]},"comments_url":{"type":"string","description":"A template for the API URL to get information about comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/comments{\\/number}"]},"commits_url":{"type":"string","description":"A template for the API URL to get information about commits on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/commits{\\/sha}"]},"compare_url":{"type":"string","description":"A template for the API URL to compare two commits or refs.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/compare\\/{base}...{head}"]},"contents_url":{"type":"string","description":"A template for the API URL to get the contents of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contents\\/{+path}"]},"contributors_url":{"type":"string","description":"A template for the API URL to list the contributors to the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/contributors"]},"deployments_url":{"type":"string","description":"The API URL to list the deployments of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/deployments"]},"downloads_url":{"type":"string","description":"The API URL to list the downloads on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/downloads"]},"events_url":{"type":"string","description":"The API URL to list the events of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/events"]},"forks_url":{"type":"string","description":"The API URL to list the forks of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/forks"]},"git_commits_url":{"type":"string","description":"A template for the API URL to get information about Git commits of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/commits{\\/sha}"]},"git_refs_url":{"type":"string","description":"A template for the API URL to get information about Git refs of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/refs{\\/sha}"]},"git_tags_url":{"type":"string","description":"A template for the API URL to get information about Git tags of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/tags{\\/sha}"]},"issue_comment_url":{"type":"string","description":"A template for the API URL to get information about issue comments on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/comments{\\/number}"]},"issue_events_url":{"type":"string","description":"A template for the API URL to get information about issue events on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues\\/events{\\/number}"]},"issues_url":{"type":"string","description":"A template for the API URL to get information about issues on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/issues{\\/number}"]},"keys_url":{"type":"string","description":"A template for the API URL to get information about deploy keys on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/keys{\\/key_id}"]},"labels_url":{"type":"string","description":"A template for the API URL to get information about labels of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/labels{\\/name}"]},"languages_url":{"type":"string","description":"The API URL to get information about the languages of the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/languages"]},"merges_url":{"type":"string","description":"The API URL to merge branches in the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/merges"]},"milestones_url":{"type":"string","description":"A template for the API URL to get information about milestones of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/milestones{\\/number}"]},"notifications_url":{"type":"string","description":"A template for the API URL to get information about notifications on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/notifications{?since,all,participating}"]},"pulls_url":{"type":"string","description":"A template for the API URL to get information about pull requests on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/pulls{\\/number}"]},"releases_url":{"type":"string","description":"A template for the API URL to get information about releases on the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/releases{\\/id}"]},"stargazers_url":{"type":"string","description":"The API URL to list the stargazers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/stargazers"]},"statuses_url":{"type":"string","description":"A template for the API URL to get information about statuses of a commit.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/statuses\\/{sha}"]},"subscribers_url":{"type":"string","description":"The API URL to list the subscribers on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscribers"]},"subscription_url":{"type":"string","description":"The API URL to subscribe to notifications for this repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/subscription"]},"tags_url":{"type":"string","description":"The API URL to get information about tags on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/tags"]},"teams_url":{"type":"string","description":"The API URL to list the teams on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/teams"]},"trees_url":{"type":"string","description":"A template for the API URL to create or retrieve a raw Git tree of the repository.","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/git\\/trees{\\/sha}"]},"hooks_url":{"type":"string","description":"The API URL to list the hooks on the repository.","format":"uri","examples":["https:\\/\\/api.github.com\\/repos\\/octocat\\/Hello-World\\/hooks"]}},"description":"A GitHub repository."}},"description":"A Dependabot alert.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'dependabot-alert-with-repository';
    public const SCHEMA_DESCRIPTION = 'A Dependabot alert.';
    /**
     * The security alert number.
     */
    private int $number;
    /**
     * The state of the Dependabot alert.
     */
    private string $state;
    /**
     * Details for the vulnerable dependency.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\Dependency::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\Dependency $dependency;
    /**
     * Details for the GitHub Security Advisory.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory $security_advisory;
    /**
     * Details pertaining to one vulnerable version range for the advisory.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability $security_vulnerability;
    /**
     * The REST API URL of the alert resource.
     */
    private string $url;
    /**
     * The GitHub URL of the alert resource.
     */
    private string $html_url;
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $created_at;
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private string $updated_at;
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $dismissed_at;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\DismissedBy::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\DismissedBy $dismissed_by;
    /**
     * The reason that the alert was dismissed.
     */
    private ?string $dismissed_reason;
    /**
     * An optional comment associated with the alert's dismissal.
     */
    private ?string $dismissed_comment;
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    private ?string $fixed_at;
    /**
     * A GitHub repository.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository $repository;
    /**
     * The security alert number.
     */
    public function number() : int
    {
        return $this->number;
    }
    /**
     * The state of the Dependabot alert.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * Details for the vulnerable dependency.
     */
    public function dependency() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\Dependency
    {
        return $this->dependency;
    }
    /**
     * Details for the GitHub Security Advisory.
     */
    public function security_advisory() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityAdvisory
    {
        return $this->security_advisory;
    }
    /**
     * Details pertaining to one vulnerable version range for the advisory.
     */
    public function security_vulnerability() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertSecurityVulnerability
    {
        return $this->security_vulnerability;
    }
    /**
     * The REST API URL of the alert resource.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * The GitHub URL of the alert resource.
     */
    public function html_url() : string
    {
        return $this->html_url;
    }
    /**
     * The time that the alert was created in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function created_at() : string
    {
        return $this->created_at;
    }
    /**
     * The time that the alert was last updated in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * The time that the alert was dismissed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function dismissed_at() : ?string
    {
        return $this->dismissed_at;
    }
    public function dismissed_by() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DependabotAlertWithRepository\DismissedBy
    {
        return $this->dismissed_by;
    }
    /**
     * The reason that the alert was dismissed.
     */
    public function dismissed_reason() : ?string
    {
        return $this->dismissed_reason;
    }
    /**
     * An optional comment associated with the alert's dismissal.
     */
    public function dismissed_comment() : ?string
    {
        return $this->dismissed_comment;
    }
    /**
     * The time that the alert was no longer detected and was considered fixed in ISO 8601 format: `YYYY-MM-DDTHH:MM:SSZ`.
     */
    public function fixed_at() : ?string
    {
        return $this->fixed_at;
    }
    /**
     * A GitHub repository.
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleRepository
    {
        return $this->repository;
    }
}
