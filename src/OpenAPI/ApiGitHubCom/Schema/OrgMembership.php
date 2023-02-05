<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrgMembership
{
    public const SCHEMA_JSON = '{"title":"Org Membership","required":["state","role","organization_url","url","organization","user"],"type":"object","properties":{"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat\\/memberships\\/defunkt"]},"state":{"enum":["active","pending"],"type":"string","description":"The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.","examples":["active"]},"role":{"enum":["admin","member","billing_manager"],"type":"string","description":"The user\'s membership type in the organization.","examples":["admin"]},"organization_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/octocat"]},"organization":{"title":"Organization Simple","required":["login","url","id","node_id","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"login":{"type":"string","examples":["github"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDEyOk9yZ2FuaXphdGlvbjE="]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/repos"]},"events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/events"]},"hooks_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/hooks"]},"issues_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/issues"]},"members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/members{\\/member}"]},"public_members_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/orgs\\/github\\/public_members{\\/member}"]},"avatar_url":{"type":"string","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"description":{"type":["string","null"],"examples":["A great organization"]}},"description":"A GitHub organization."},"user":{"anyOf":[{"type":"null"},{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}]},"permissions":{"required":["can_create_repository"],"type":"object","properties":{"can_create_repository":{"type":"boolean"}}}},"description":"Org Membership"}';
    public const SCHEMA_TITLE = 'Org Membership';
    public const SCHEMA_DESCRIPTION = 'Org Membership';
    public readonly string $url;
    /**
     * The state of the member in the organization. The `pending` state indicates the user has not yet accepted an invitation.
     */
    public readonly string $state;
    /**
     * The user's membership type in the organization.
     */
    public readonly string $role;
    public readonly string $organization_url;
    /**
     * A GitHub organization.
     */
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple $organization;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership\User $user;
    public readonly ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership\Permissions $permissions;
    public function __construct(string $url, string $state, string $role, string $organization_url, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrganizationSimple $organization, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership\User $user, ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\OrgMembership\Permissions $permissions)
    {
        $this->url = $url;
        $this->state = $state;
        $this->role = $role;
        $this->organization_url = $organization_url;
        $this->organization = $organization;
        $this->user = $user;
        $this->permissions = $permissions;
    }
}
