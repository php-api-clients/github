<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class SimpleUser
{
    public const SCHEMA_JSON = '{"title":"Simple User","required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"name":{"type":["string","null"]},"email":{"type":["string","null"]},"login":{"type":"string","examples":["octocat"]},"id":{"type":"integer","examples":[1]},"node_id":{"type":"string","examples":["MDQ6VXNlcjE="]},"avatar_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/images\\/error\\/octocat_happy.gif"]},"gravatar_id":{"type":["string","null"],"examples":["41d064eb2195891e12d0413f63227ea7"]},"url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat"]},"html_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat"]},"followers_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/followers"]},"following_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/following{\\/other_user}"]},"gists_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/gists{\\/gist_id}"]},"starred_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/starred{\\/owner}{\\/repo}"]},"subscriptions_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/subscriptions"]},"organizations_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/orgs"]},"repos_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/repos"]},"events_url":{"type":"string","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/events{\\/privacy}"]},"received_events_url":{"type":"string","format":"uri","examples":["https:\\/\\/api.github.com\\/users\\/octocat\\/received_events"]},"type":{"type":"string","examples":["User"]},"site_admin":{"type":"boolean"},"starred_at":{"type":"string","examples":["\\"2020-07-09T00:17:55Z\\""]}},"description":"A GitHub user."}';
    public const SCHEMA_TITLE = 'Simple User';
    public const SCHEMA_DESCRIPTION = 'A GitHub user.';
    public ?string $name;
    public ?string $email;
    public ?string $login;
    public ?int $id;
    public ?string $node_id;
    public ?string $avatar_url;
    public ?string $gravatar_id;
    public ?string $url;
    public ?string $html_url;
    public ?string $followers_url;
    public ?string $following_url;
    public ?string $gists_url;
    public ?string $starred_url;
    public ?string $subscriptions_url;
    public ?string $organizations_url;
    public ?string $repos_url;
    public ?string $events_url;
    public ?string $received_events_url;
    public ?string $type;
    public ?bool $site_admin;
    public string $starred_at;
    public function __construct(string $name, string $email, string $login, int $id, string $node_id, string $avatar_url, string $gravatar_id, string $url, string $html_url, string $followers_url, string $following_url, string $gists_url, string $starred_url, string $subscriptions_url, string $organizations_url, string $repos_url, string $events_url, string $received_events_url, string $type, bool $site_admin, string $starred_at)
    {
        $this->name = $name;
        $this->email = $email;
        $this->login = $login;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->avatar_url = $avatar_url;
        $this->gravatar_id = $gravatar_id;
        $this->url = $url;
        $this->html_url = $html_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->starred_url = $starred_url;
        $this->subscriptions_url = $subscriptions_url;
        $this->organizations_url = $organizations_url;
        $this->repos_url = $repos_url;
        $this->events_url = $events_url;
        $this->received_events_url = $received_events_url;
        $this->type = $type;
        $this->site_admin = $site_admin;
        $this->starred_at = $starred_at;
    }
}
