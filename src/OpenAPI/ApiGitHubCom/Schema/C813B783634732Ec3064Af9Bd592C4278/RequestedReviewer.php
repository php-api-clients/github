<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\C813B783634732Ec3064Af9Bd592C4278;

final class RequestedReviewer
{
    public const SCHEMA_JSON = '{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization","Mannequin"],"type":"string"},"url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'User';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $avatar_url = null;
    private ?bool $deleted = null;
    private ?string $email = null;
    private ?string $events_url = null;
    private ?string $followers_url = null;
    private ?string $following_url = null;
    private ?string $gists_url = null;
    private ?string $gravatar_id = null;
    private ?string $html_url = null;
    private int $id;
    private string $login;
    private ?string $name = null;
    private ?string $node_id = null;
    private ?string $organizations_url = null;
    private ?string $received_events_url = null;
    private ?string $repos_url = null;
    private ?bool $site_admin = null;
    private ?string $starred_url = null;
    private ?string $subscriptions_url = null;
    private ?string $type = null;
    private ?string $url = null;
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
    public function deleted() : ?bool
    {
        return $this->deleted;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function events_url() : ?string
    {
        return $this->events_url;
    }
    public function followers_url() : ?string
    {
        return $this->followers_url;
    }
    public function following_url() : ?string
    {
        return $this->following_url;
    }
    public function gists_url() : ?string
    {
        return $this->gists_url;
    }
    public function gravatar_id() : ?string
    {
        return $this->gravatar_id;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function login() : string
    {
        return $this->login;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function organizations_url() : ?string
    {
        return $this->organizations_url;
    }
    public function received_events_url() : ?string
    {
        return $this->received_events_url;
    }
    public function repos_url() : ?string
    {
        return $this->repos_url;
    }
    public function site_admin() : ?bool
    {
        return $this->site_admin;
    }
    public function starred_url() : ?string
    {
        return $this->starred_url;
    }
    public function subscriptions_url() : ?string
    {
        return $this->subscriptions_url;
    }
    public function type() : ?string
    {
        return $this->type;
    }
    public function url() : ?string
    {
        return $this->url;
    }
}
