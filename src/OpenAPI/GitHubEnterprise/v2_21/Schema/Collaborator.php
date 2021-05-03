<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Collaborator
{
    public const SCHEMA_TITLE = 'Collaborator';
    public const SPL_HASH = '0000000065d6246e000000007ce49c9a';
    public const SCHEMA_DESCRIPTION = 'Collaborator';
    private string $login;
    private int $id;
    private string $node_id;
    private string $avatar_url;
    private string $gravatar_id;
    private string $url;
    private string $html_url;
    private string $followers_url;
    private string $following_url;
    private string $gists_url;
    private string $starred_url;
    private string $subscriptions_url;
    private string $organizations_url;
    private string $repos_url;
    private string $events_url;
    private string $received_events_url;
    private string $type;
    private boolean $site_admin;
    private object $permissions;
    public function login() : string
    {
        return $this->login;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function gravatar_id() : string
    {
        return $this->gravatar_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function html_url() : string
    {
        return $this->html_url;
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
    public function starred_url() : string
    {
        return $this->starred_url;
    }
    public function subscriptions_url() : string
    {
        return $this->subscriptions_url;
    }
    public function organizations_url() : string
    {
        return $this->organizations_url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function received_events_url() : string
    {
        return $this->received_events_url;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function site_admin() : boolean
    {
        return $this->site_admin;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
}
