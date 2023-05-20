<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class RepositoryAdvisory
{
    public const SCHEMA_JSON         = '{"required":["ghsa_id","cve_id","url","html_url","summary","description","severity","author","publisher","identifiers","state","created_at","updated_at","published_at","closed_at","withdrawn_at","submission","vulnerabilities","cvss","cwes","cwe_ids","credits","credits_detailed"],"type":"object","properties":{"ghsa_id":{"type":"string","description":"The GitHub Security Advisory ID.","readOnly":true},"cve_id":{"type":["string","null"],"description":"The Common Vulnerabilities and Exposures (CVE) ID."},"url":{"type":"string","description":"The API URL for the advisory."},"html_url":{"type":"string","description":"The URL for the advisory.","format":"uri","readOnly":true},"summary":{"maxLength":1024,"type":"string","description":"A short summary of the advisory."},"description":{"maxLength":65535,"type":["string","null"],"description":"A detailed description of what the advisory entails."},"severity":{"enum":["critical","high","medium","low",null],"type":["string","null"],"description":"The severity of the advisory."},"author":{"type":["null"],"allOf":[{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}],"description":"The author of the advisory.","readOnly":true},"publisher":{"type":["null"],"allOf":[{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}],"description":"The publisher of the advisory.","readOnly":true},"identifiers":{"type":"array","items":{"required":["type","value"],"type":"object","properties":{"type":{"enum":["CVE","GHSA"],"type":"string","description":"The type of identifier."},"value":{"type":"string","description":"The identifier value."}}},"readOnly":true},"state":{"enum":["published","closed","withdrawn","draft","triage"],"type":"string","description":"The state of the advisory."},"created_at":{"type":["string","null"],"description":"The date and time of when the advisory was created, in ISO 8601 format.","format":"date-time","readOnly":true},"updated_at":{"type":["string","null"],"description":"The date and time of when the advisory was last updated, in ISO 8601 format.","format":"date-time","readOnly":true},"published_at":{"type":["string","null"],"description":"The date and time of when the advisory was published, in ISO 8601 format.","format":"date-time","readOnly":true},"closed_at":{"type":["string","null"],"description":"The date and time of when the advisory was closed, in ISO 8601 format.","format":"date-time","readOnly":true},"withdrawn_at":{"type":["string","null"],"description":"The date and time of when the advisory was withdrawn, in ISO 8601 format.","format":"date-time","readOnly":true},"submission":{"required":["accepted"],"type":["object","null"],"properties":{"accepted":{"type":"boolean","description":"Whether a private vulnerability report was accepted by the repository\'s administrators.","readOnly":true}},"readOnly":true},"vulnerabilities":{"type":["array","null"],"items":{"required":["package","vulnerable_version_range","patched_versions","vulnerable_functions"],"type":"object","properties":{"package":{"required":["ecosystem","name"],"type":["object","null"],"properties":{"ecosystem":{"enum":["rubygems","npm","pip","maven","nuget","composer","go","rust","erlang","actions","pub","other"],"type":"string","description":"The package\'s language or package management ecosystem."},"name":{"type":["string","null"],"description":"The unique package name within its ecosystem."}},"description":"The name of the package affected by the vulnerability."},"vulnerable_version_range":{"type":["string","null"],"description":"The range of the package versions affected by the vulnerability."},"patched_versions":{"type":["string","null"],"description":"The package version(s) that resolve the vulnerability."},"vulnerable_functions":{"type":["array","null"],"items":{"type":"string"},"description":"The functions in the package that are affected."}},"description":"A product affected by the vulnerability detailed in a repository security advisory.","additionalProperties":false}},"cvss":{"required":["vector_string","score"],"type":["object","null"],"properties":{"vector_string":{"type":["string","null"],"description":"The CVSS vector."},"score":{"maximum":10,"minimum":0,"type":["number","null"],"description":"The CVSS score.","readOnly":true}}},"cwes":{"type":["array","null"],"items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string","description":"The Common Weakness Enumeration (CWE) identifier."},"name":{"type":"string","description":"The name of the CWE.","readOnly":true}}},"readOnly":true},"cwe_ids":{"type":["array","null"],"items":{"type":"string"},"description":"A list of only the CWE IDs."},"credits":{"type":["array","null"],"items":{"type":"object","properties":{"login":{"type":"string","description":"The username of the user credited."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."}}}},"credits_detailed":{"type":["array","null"],"items":{"required":["user","type","state"],"type":"object","properties":{"user":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"type":{"enum":["analyst","finder","reporter","coordinator","remediation_developer","remediation_reviewer","remediation_verifier","tool","sponsor","other"],"type":"string","description":"The type of credit the user is receiving."},"state":{"enum":["accepted","declined","pending"],"type":"string","description":"The state of the user\'s acceptance of the credit."}},"description":"A credit given to a user for a repository security advisory.","additionalProperties":false},"readOnly":true}},"description":"A repository security advisory.","additionalProperties":false}';
    public const SCHEMA_TITLE        = '';
    public const SCHEMA_DESCRIPTION  = 'A repository security advisory.';
    public const SCHEMA_EXAMPLE_DATA = '{"ghsa_id":"generated","cve_id":"generated","url":"generated","html_url":"https:\\/\\/example.com\\/","summary":"generated","description":"generated","severity":"low","author":{"name":"generated","email":"generated","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"publisher":{"name":"generated","email":"generated","login":"octocat","id":1,"node_id":"MDQ6VXNlcjE=","avatar_url":"https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif","gravatar_id":"41d064eb2195891e12d0413f63227ea7","url":"https:\\/\\/api.github.com\\/users\\/octocat","html_url":"https:\\/\\/github.com\\/octocat","followers_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/followers","following_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}","gists_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}","starred_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}","subscriptions_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions","organizations_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/orgs","repos_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/repos","events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}","received_events_url":"https:\\/\\/api.github.com\\/users\\/octocat\\/received_events","type":"User","site_admin":false,"starred_at":"\\"2020-07-09T00:17:55Z\\""},"identifiers":[{"type":"GHSA","value":"generated"},{"type":"GHSA","value":"generated"}],"state":"published","created_at":"1970-01-01T00:00:00+00:00","updated_at":"1970-01-01T00:00:00+00:00","published_at":"1970-01-01T00:00:00+00:00","closed_at":"1970-01-01T00:00:00+00:00","withdrawn_at":"1970-01-01T00:00:00+00:00","submission":{"accepted":false},"vulnerabilities":null,"cvss":{"vector_string":"generated","score":0.5},"cwes":null,"cwe_ids":null,"credits":null,"credits_detailed":null}';

    /**
     * ghsaId: The GitHub Security Advisory ID.
     * cveId: The Common Vulnerabilities and Exposures (CVE) ID.
     * url: The API URL for the advisory.
     * htmlUrl: The URL for the advisory.
     * summary: A short summary of the advisory.
     * description: A detailed description of what the advisory entails.
     * severity: The severity of the advisory.
     * author: The author of the advisory.
     * publisher: The publisher of the advisory.
     * state: The state of the advisory.
     * createdAt: The date and time of when the advisory was created, in ISO 8601 format.
     * updatedAt: The date and time of when the advisory was last updated, in ISO 8601 format.
     * publishedAt: The date and time of when the advisory was published, in ISO 8601 format.
     * closedAt: The date and time of when the advisory was closed, in ISO 8601 format.
     * withdrawnAt: The date and time of when the advisory was withdrawn, in ISO 8601 format.
     * cweIds: A list of only the CWE IDs.
     */
    public function __construct(#[MapFrom('ghsa_id')] public string $ghsaId, #[MapFrom('cve_id')] public ?string $cveId, public string $url, #[MapFrom('html_url')] public string $htmlUrl, public string $summary, public ?string $description, public ?string $severity, public Schema\SimpleUser $author, public Schema\SimpleUser $publisher, public array $identifiers, public string $state, #[MapFrom('created_at')] public ?string $createdAt, #[MapFrom('updated_at')] public ?string $updatedAt, #[MapFrom('published_at')] public ?string $publishedAt, #[MapFrom('closed_at')] public ?string $closedAt, #[MapFrom('withdrawn_at')] public ?string $withdrawnAt, public ?Schema\RepositoryAdvisory\Submission $submission, public ?array $vulnerabilities, public ?Schema\RepositoryAdvisory\Cvss $cvss, public ?array $cwes, #[MapFrom('cwe_ids')] public ?array $cweIds, public ?array $credits, #[MapFrom('credits_detailed')] public ?array $creditsDetailed)
    {
    }
}
