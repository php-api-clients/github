<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ListCustomRoles\Response\Application\Json;

final class H200
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"total_count":{"type":"integer","description":"The number of custom roles in this organization","examples":[3]},"custom_roles":{"type":"array","items":{"title":"Organization Custom Repository Role","required":["id","name"],"type":"object","properties":{"id":{"type":"integer","description":"The unique identifier of the custom role."},"name":{"type":"string","description":"The name of the custom role."},"description":{"type":["string","null"],"description":"A short description about who this role is for or what permissions it grants."},"base_role":{"enum":["read","triage","write","maintain"],"type":"string","description":"The system role from which this role inherits permissions."},"permissions":{"type":"array","items":{"type":"string"},"description":"A list of additional permissions included in this role."},"organization":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}},"description":"Custom repository roles created by organization administrators"}}}}';
    public const SCHEMA_TITLE = 'ListCustomRoles\\Response\\Application\\Json\\H200';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The number of custom roles in this organization
     */
    private int $total_count;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole::class)
     */
    private array $custom_roles = array();
    /**
     * The number of custom roles in this organization
     */
    public function total_count() : int
    {
        return $this->total_count;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationCustomRepositoryRole>
     */
    public function custom_roles() : array
    {
        return $this->custom_roles;
    }
}
