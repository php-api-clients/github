<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class OrganizationInvitation
{
    public const SCHEMA_JSON = '{"title":"Organization Invitation","required":["id","login","email","role","created_at","inviter","team_count","invitation_teams_url","node_id"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":["string","null"]},"email":{"type":["string","null"]},"role":{"type":"string"},"created_at":{"type":"string"},"failed_at":{"type":["string","null"]},"failed_reason":{"type":["string","null"]},"inviter":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"team_count":{"type":"integer"},"node_id":{"type":"string","examples":["\\"MDIyOk9yZ2FuaXphdGlvbkludml0YXRpb24x\\""]},"invitation_teams_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/organizations\\/16\\/invitations\\/1\\/teams\\""]}},"description":"Organization Invitation"}';
    public const SCHEMA_TITLE = 'Organization Invitation';
    public const SCHEMA_DESCRIPTION = 'Organization Invitation';
    private int $id;
    private $login;
    private $email;
    private string $role;
    private string $created_at;
    private $failed_at;
    private $failed_reason;
    /**
     * A GitHub user.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $inviter;
    private int $team_count;
    private string $node_id;
    private string $invitation_teams_url;
    public function id() : int
    {
        return $this->id;
    }
    public function login()
    {
        return $this->login;
    }
    public function email()
    {
        return $this->email;
    }
    public function role() : string
    {
        return $this->role;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function failed_at()
    {
        return $this->failed_at;
    }
    public function failed_reason()
    {
        return $this->failed_reason;
    }
    /**
     * A GitHub user.
     */
    public function inviter() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->inviter;
    }
    public function team_count() : int
    {
        return $this->team_count;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function invitation_teams_url() : string
    {
        return $this->invitation_teams_url;
    }
}
