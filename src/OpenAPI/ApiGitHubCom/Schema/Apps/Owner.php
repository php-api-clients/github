<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Apps;

final class Owner
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"hooks_url":{"type":"string"},"issues_url":{"type":"string"},"members_url":{"type":"string"},"public_members_url":{"type":"string"},"avatar_url":{"type":"string"},"description":{"type":"string"},"gravatar_id":{"type":"string","examples":["\\"\\""]},"html_url":{"type":"string","examples":["\\"https:\\/\\/github.com\\/testorg-ea8ec76d71c3af4b\\""]},"followers_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/followers\\""]},"following_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/following{\\/other_user}\\""]},"gists_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/gists{\\/gist_id}\\""]},"starred_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/starred{\\/owner}{\\/repo}\\""]},"subscriptions_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/subscriptions\\""]},"organizations_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/orgs\\""]},"received_events_url":{"type":"string","examples":["\\"https:\\/\\/api.github.com\\/users\\/testorg-ea8ec76d71c3af4b\\/received_events\\""]},"type":{"type":"string","examples":["\\"Organization\\""]},"site_admin":{"type":"boolean","examples":[false]}}}';
    public const SCHEMA_TITLE = 'Apps\\Owner';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $login;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $url;
    public readonly string $repos_url;
    public readonly string $events_url;
    public readonly string $hooks_url;
    public readonly string $issues_url;
    public readonly string $members_url;
    public readonly string $public_members_url;
    public readonly string $avatar_url;
    public readonly string $description;
    public readonly string $gravatar_id;
    public readonly string $html_url;
    public readonly string $followers_url;
    public readonly string $following_url;
    public readonly string $gists_url;
    public readonly string $starred_url;
    public readonly string $subscriptions_url;
    public readonly string $organizations_url;
    public readonly string $received_events_url;
    public readonly string $type;
    public readonly bool $site_admin;
    public function __construct(string $login, int $id, string $node_id, string $url, string $repos_url, string $events_url, string $hooks_url, string $issues_url, string $members_url, string $public_members_url, string $avatar_url, string $description, string $gravatar_id, string $html_url, string $followers_url, string $following_url, string $gists_url, string $starred_url, string $subscriptions_url, string $organizations_url, string $received_events_url, string $type, bool $site_admin)
    {
        $this->login = $login;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->url = $url;
        $this->repos_url = $repos_url;
        $this->events_url = $events_url;
        $this->hooks_url = $hooks_url;
        $this->issues_url = $issues_url;
        $this->members_url = $members_url;
        $this->public_members_url = $public_members_url;
        $this->avatar_url = $avatar_url;
        $this->description = $description;
        $this->gravatar_id = $gravatar_id;
        $this->html_url = $html_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->starred_url = $starred_url;
        $this->subscriptions_url = $subscriptions_url;
        $this->organizations_url = $organizations_url;
        $this->received_events_url = $received_events_url;
        $this->type = $type;
        $this->site_admin = $site_admin;
    }
}
