<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Release;

final class Author
{
    public const SCHEMA_JSON = '{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'Release\\Author';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $avatar_url;
    public readonly string $events_url;
    public readonly string $followers_url;
    public readonly string $following_url;
    public readonly string $gists_url;
    public readonly string $gravatar_id;
    public readonly string $html_url;
    public readonly int $id;
    public readonly string $login;
    public readonly string $node_id;
    public readonly string $organizations_url;
    public readonly string $received_events_url;
    public readonly string $repos_url;
    public readonly bool $site_admin;
    public readonly string $starred_url;
    public readonly string $subscriptions_url;
    public readonly string $type;
    public readonly string $url;
    public function __construct(string $avatar_url, string $events_url, string $followers_url, string $following_url, string $gists_url, string $gravatar_id, string $html_url, int $id, string $login, string $node_id, string $organizations_url, string $received_events_url, string $repos_url, bool $site_admin, string $starred_url, string $subscriptions_url, string $type, string $url)
    {
        $this->avatar_url = $avatar_url;
        $this->events_url = $events_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->gravatar_id = $gravatar_id;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->login = $login;
        $this->node_id = $node_id;
        $this->organizations_url = $organizations_url;
        $this->received_events_url = $received_events_url;
        $this->repos_url = $repos_url;
        $this->site_admin = $site_admin;
        $this->starred_url = $starred_url;
        $this->subscriptions_url = $subscriptions_url;
        $this->type = $type;
        $this->url = $url;
    }
}
