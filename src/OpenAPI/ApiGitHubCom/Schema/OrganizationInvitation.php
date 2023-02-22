<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class OrganizationInvitation
{
    public const SCHEMA_JSON = '{"title":"Organization Invitation","required":["id","login","email","role","created_at","inviter","team_count","invitation_teams_url","node_id"],"type":"object","properties":{"id":{"type":"integer"},"login":{"type":["string","null"]},"email":{"type":["string","null"]},"role":{"type":"string"},"created_at":{"type":"string"},"failed_at":{"type":["string","null"]},"failed_reason":{"type":["string","null"]},"inviter":{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."},"team_count":{"type":"integer"},"node_id":{"type":"string","examples":["\\"MDIyOk9yZ2FuaXphdGlvbkludml0YXRpb24x\\""]},"invitation_teams_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/organizations\\/16\\/invitations\\/1\\/teams\\""]},"invitation_source":{"type":"string","examples":["\\"member\\""]}},"description":"Organization Invitation"}';
    public const SCHEMA_TITLE = 'Organization Invitation';
    public const SCHEMA_DESCRIPTION = 'Organization Invitation';
    public ?int $id;
    public ?string $login;
    public ?string $email;
    public ?string $role;
    public ?string $created_at;
    public ?string $failed_at;
    public ?string $failed_reason;
    /**
     * A GitHub user.
     */
    public ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $inviter;
    public ?int $team_count;
    public ?string $node_id;
    public ?string $invitation_teams_url;
    public string $invitation_source;
    public function __construct(int $id, string $login, string $email, string $role, string $created_at, string $failed_at, string $failed_reason, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $inviter, int $team_count, string $node_id, string $invitation_teams_url, string $invitation_source)
    {
        $this->id = $id;
        $this->login = $login;
        $this->email = $email;
        $this->role = $role;
        $this->created_at = $created_at;
        $this->failed_at = $failed_at;
        $this->failed_reason = $failed_reason;
        $this->inviter = $inviter;
        $this->team_count = $team_count;
        $this->node_id = $node_id;
        $this->invitation_teams_url = $invitation_teams_url;
        $this->invitation_source = $invitation_source;
    }
}
