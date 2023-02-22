<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequest\Head\Repo;

final readonly class Owner
{
    public const SCHEMA_JSON = '{"required":["avatar_url","events_url","followers_url","following_url","gists_url","gravatar_id","html_url","id","node_id","login","organizations_url","received_events_url","repos_url","site_admin","starred_url","subscriptions_url","type","url"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":["string","null"]},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"node_id":{"type":"string"},"login":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $avatar_url;
    public ?string $events_url;
    public ?string $followers_url;
    public ?string $following_url;
    public ?string $gists_url;
    public ?string $gravatar_id;
    public ?string $html_url;
    public ?int $id;
    public ?string $node_id;
    public ?string $login;
    public ?string $organizations_url;
    public ?string $received_events_url;
    public ?string $repos_url;
    public ?bool $site_admin;
    public ?string $starred_url;
    public ?string $subscriptions_url;
    public ?string $type;
    public ?string $url;
    public function __construct(string $avatar_url, string $events_url, string $followers_url, string $following_url, string $gists_url, string $gravatar_id, string $html_url, int $id, string $node_id, string $login, string $organizations_url, string $received_events_url, string $repos_url, bool $site_admin, string $starred_url, string $subscriptions_url, string $type, string $url)
    {
        $this->avatar_url = $avatar_url;
        $this->events_url = $events_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->gravatar_id = $gravatar_id;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->node_id = $node_id;
        $this->login = $login;
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
