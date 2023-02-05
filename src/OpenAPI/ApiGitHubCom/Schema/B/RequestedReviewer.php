<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\B;

final class RequestedReviewer
{
    public const SCHEMA_JSON = '{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'User';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $avatar_url;
    public readonly ?bool $deleted;
    public readonly ?string $email;
    public readonly ?string $events_url;
    public readonly ?string $followers_url;
    public readonly ?string $following_url;
    public readonly ?string $gists_url;
    public readonly ?string $gravatar_id;
    public readonly ?string $html_url;
    public readonly int $id;
    public readonly string $login;
    public readonly ?string $name;
    public readonly ?string $node_id;
    public readonly ?string $organizations_url;
    public readonly ?string $received_events_url;
    public readonly ?string $repos_url;
    public readonly ?bool $site_admin;
    public readonly ?string $starred_url;
    public readonly ?string $subscriptions_url;
    public readonly ?string $type;
    public readonly ?string $url;
    public function __construct(string $avatar_url, bool $deleted, string $email, string $events_url, string $followers_url, string $following_url, string $gists_url, string $gravatar_id, string $html_url, int $id, string $login, string $name, string $node_id, string $organizations_url, string $received_events_url, string $repos_url, bool $site_admin, string $starred_url, string $subscriptions_url, string $type, string $url)
    {
        $this->avatar_url = $avatar_url;
        $this->deleted = $deleted;
        $this->email = $email;
        $this->events_url = $events_url;
        $this->followers_url = $followers_url;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->gravatar_id = $gravatar_id;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->login = $login;
        $this->name = $name;
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
