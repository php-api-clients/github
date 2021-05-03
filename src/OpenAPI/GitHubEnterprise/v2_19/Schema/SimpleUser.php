<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class SimpleUser
{
    public const SCHEMA_TITLE = 'Simple User';
    public const SPL_HASH = '000000001831328a000000004028667d';
    public const SCHEMA_DESCRIPTION = 'Simple User';
    private ?string $login = null;
    private ?int $id = null;
    private ?string $node_id = null;
    private ?string $avatar_url = null;
    private ?string $gravatar_id = null;
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
    private ?string $type = null;
    private ?bool $site_admin = null;
    private ?string $starred_at = null;
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
    public function gravatar_id() : ?string
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
    public function type() : ?string
    {
        return $this->type;
    }
    public function site_admin() : ?bool
    {
        return $this->site_admin;
    }
    public function starred_at() : ?string
    {
        return $this->starred_at;
    }
}
