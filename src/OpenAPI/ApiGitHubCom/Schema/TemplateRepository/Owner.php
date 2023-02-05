<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\TemplateRepository;

final class Owner
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string"},"gravatar_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"organizations_url":{"type":"string"},"repos_url":{"type":"string"},"events_url":{"type":"string"},"received_events_url":{"type":"string"},"type":{"type":"string"},"site_admin":{"type":"boolean"}}}';
    public const SCHEMA_TITLE = 'TemplateRepository\\Owner';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $login;
    public readonly int $id;
    public readonly string $node_id;
    public readonly string $avatar_url;
    public readonly string $gravatar_id;
    public readonly string $url;
    public readonly string $html_url;
    public readonly string $followers_url;
    public readonly string $following_url;
    public readonly string $gists_url;
    public readonly string $starred_url;
    public readonly string $subscriptions_url;
    public readonly string $organizations_url;
    public readonly string $repos_url;
    public readonly string $events_url;
    public readonly string $received_events_url;
    public readonly string $type;
    public readonly bool $site_admin;
    public function __construct(string $login, int $id, string $node_id, string $avatar_url, string $gravatar_id, string $url, string $html_url, string $followers_url, string $following_url, string $gists_url, string $starred_url, string $subscriptions_url, string $organizations_url, string $repos_url, string $events_url, string $received_events_url, string $type, bool $site_admin)
    {
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
    }
}
