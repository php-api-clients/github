<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\RegistryPackage;

final class Owner
{
    public const SCHEMA_JSON = '{"required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"avatar_url":{"type":"string"},"events_url":{"type":"string"},"followers_url":{"type":"string"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"login":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"url":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'RegistryPackage\\Owner';
    public const SCHEMA_DESCRIPTION = '';
    private string $avatar_url;
    private string $events_url;
    private string $followers_url;
    private string $following_url;
    private string $gists_url;
    private string $gravatar_id;
    private string $html_url;
    private int $id;
    private string $login;
    private string $node_id;
    private string $organizations_url;
    private string $received_events_url;
    private string $repos_url;
    private bool $site_admin;
    private string $starred_url;
    private string $subscriptions_url;
    private string $type;
    private string $url;
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function followers_url() : string
    {
        return $this->followers_url;
    }
    public function following_url() : string
    {
        return $this->following_url;
    }
    public function gists_url() : string
    {
        return $this->gists_url;
    }
    public function gravatar_id() : string
    {
        return $this->gravatar_id;
    }
    public function html_url() : string
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
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function organizations_url() : string
    {
        return $this->organizations_url;
    }
    public function received_events_url() : string
    {
        return $this->received_events_url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function site_admin() : bool
    {
        return $this->site_admin;
    }
    public function starred_url() : string
    {
        return $this->starred_url;
    }
    public function subscriptions_url() : string
    {
        return $this->subscriptions_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function url() : string
    {
        return $this->url;
    }
}
