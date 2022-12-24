<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class Contributor
{
    public const SCHEMA_JSON = '{"title":"Contributor","required":["contributions","type"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":["string","null"]},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string"},"received_events_url":{"type":"string","format":"uri"},"type":{"type":"string"},"site_admin":{"type":"boolean"},"contributions":{"type":"integer"},"email":{"type":"string"},"name":{"type":"string"}},"description":"Contributor"}';
    public const SCHEMA_TITLE = 'Contributor';
    public const SCHEMA_DESCRIPTION = 'Contributor';
    private ?string $login = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $avatar_url = null;
    private $gravatar_id;
    private ?string $url = null;
    private ?string $html_url = null;
    private ?string $followers_url = null;
    private ?string $following_url = null;
    private ?string $gists_url = null;
    private ?string $starred_url = null;
    private ?string $subscriptions_url = null;
    private ?string $organizations_url = null;
    private ?string $repos_url = null;
    private ?string $events_url = null;
    private ?string $received_events_url = null;
    private string $type;
    private ?bool $site_admin = null;
    private int $contributions;
    private ?string $email = null;
    private ?string $name = null;
    public function login() : ?string
    {
        return $this->login;
    }
    public function id() : ?int
    {
        return $this->id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function avatar_url() : ?string
    {
        return $this->avatar_url;
    }
    public function gravatar_id()
    {
        return $this->gravatar_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
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
    public function starred_url() : ?string
    {
        return $this->starred_url;
    }
    public function subscriptions_url() : ?string
    {
        return $this->subscriptions_url;
    }
    public function organizations_url() : ?string
    {
        return $this->organizations_url;
    }
    public function repos_url() : ?string
    {
        return $this->repos_url;
    }
    public function events_url() : ?string
    {
        return $this->events_url;
    }
    public function received_events_url() : ?string
    {
        return $this->received_events_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function site_admin() : ?bool
    {
        return $this->site_admin;
    }
    public function contributions() : int
    {
        return $this->contributions;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function name() : ?string
    {
        return $this->name;
    }
}
