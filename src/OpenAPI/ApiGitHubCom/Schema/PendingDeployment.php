<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PendingDeployment
{
    public const SCHEMA_JSON = '{"title":"Pending Deployment","required":["environment","wait_timer","wait_timer_started_at","current_user_can_approve","reviewers"],"type":"object","properties":{"environment":{"type":"object","properties":{"id":{"type":"integer","description":"The id of the environment.","examples":[56780428]},"node_id":{"type":"string","examples":["MDExOkVudmlyb25tZW50NTY3ODA0Mjg="]},"name":{"type":"string","description":"The name of the environment.","examples":["staging"]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/github\\/hello-world\\/environments\\/staging"]},"html_url":{"type":"string","examples":["https:\\/\\/github.com\\/github\\/hello-world\\/deployments\\/activity_log?environments_filter=staging"]}}},"wait_timer":{"type":"integer","description":"The set duration of the wait timer","examples":[30]},"wait_timer_started_at":{"type":["string","null"],"description":"The time that the wait timer began.","format":"date-time","examples":["2020-11-23T22:00:40Z"]},"current_user_can_approve":{"type":"boolean","description":"Whether the currently authenticated user can approve the deployment","examples":[true]},"reviewers":{"type":"array","items":{"type":"object","properties":{"type":{"enum":["User","Team"],"type":"string","description":"The type of reviewer.","examples":["User"]},"reviewer":{"anyOf":[{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},{"title":"Team","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug","parent"],"type":"object","properties":{"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"slug":{"type":"string"},"description":{"type":["string","null"]},"privacy":{"type":"string"},"permission":{"type":"string"},"permissions":{"required":["pull","triage","push","maintain","admin"],"type":"object","properties":{"pull":{"type":"boolean"},"triage":{"type":"boolean"},"push":{"type":"boolean"},"maintain":{"type":"boolean"},"admin":{"type":"boolean"}}},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"members_url":{"type":"string"},"repositories_url":{"type":"string","format":"uri"},"parent":{"anyOf":[{"type":"null"},{"title":"Team Simple","required":["id","node_id","url","members_url","name","description","permission","html_url","repositories_url","slug"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the team","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VGVhbTE="]},"url":{"type":"string","description":"URL for the team","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/members{\\/member}"]},"name":{"type":"string","description":"Name of the team","examples":["Justice League"]},"description":{"type":["string","null"],"description":"Description of the team","examples":["A great team."]},"permission":{"type":"string","description":"Permission that the team will have for its repositories","examples":["admin"]},"privacy":{"type":"string","description":"The level of privacy this team should have","examples":["closed"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/orgs\\/rails\\/teams\\/core"]},"repositories_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/organizations\\/1\\/team\\/1\\/repos"]},"slug":{"type":"string","examples":["justice-league"]},"ldap_dn":{"type":"string","description":"Distinguished Name (DN) that team maps to within LDAP environment","examples":["uid=example,ou=users,dc=github,dc=com"]}},"description":"Groups of organization members that gives permissions on specified repositories."}]}},"description":"Groups of organization members that gives permissions on specified repositories."}]}}},"description":"The people or teams that may approve jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed."}},"description":"Details of a deployment that is waiting for protection rules to pass"}';
    public const SCHEMA_TITLE = 'Pending Deployment';
    public const SCHEMA_DESCRIPTION = 'Details of a deployment that is waiting for protection rules to pass';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4F8C2E7C4C026105A7E1E0049836B0B8::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4F8C2E7C4C026105A7E1E0049836B0B8 $environment;
    /**
     * The set duration of the wait timer
     */
    private int $wait_timer;
    /**
     * The time that the wait timer began.
     */
    private $wait_timer_started_at;
    /**
     * Whether the currently authenticated user can approve the deployment
     */
    private bool $current_user_can_approve;
    /**
     * The people or teams that may approve jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A32F6E5318Ba4Dc1D35C40Ad014Aa>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A32F6E5318Ba4Dc1D35C40Ad014Aa::class)
     */
    private array $reviewers = array();
    public function environment() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\C4F8C2E7C4C026105A7E1E0049836B0B8
    {
        return $this->environment;
    }
    /**
     * The set duration of the wait timer
     */
    public function wait_timer() : int
    {
        return $this->wait_timer;
    }
    /**
     * The time that the wait timer began.
     */
    public function wait_timer_started_at()
    {
        return $this->wait_timer_started_at;
    }
    /**
     * Whether the currently authenticated user can approve the deployment
     */
    public function current_user_can_approve() : bool
    {
        return $this->current_user_can_approve;
    }
    /**
     * The people or teams that may approve jobs that reference the environment. You can list up to six users or teams as reviewers. The reviewers must have at least read access to the repository. Only one of the required reviewers needs to approve the job for it to proceed.
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown\CA53A32F6E5318Ba4Dc1D35C40Ad014Aa>
     */
    public function reviewers() : array
    {
        return $this->reviewers;
    }
}
