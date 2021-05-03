<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class PublicUser
{
    public const SCHEMA_TITLE = 'Public User';
    public const SPL_HASH = '00000000181425a7000000005f691719';
    public const SCHEMA_DESCRIPTION = 'Public User';
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
    private bool $site_admin;
    private string $name;
    private string $company;
    private string $blog;
    private string $location;
    private string $email;
    private bool $hireable;
    private string $bio;
    private int $public_repos;
    private int $public_gists;
    private int $followers;
    private int $following;
    private string $created_at;
    private string $updated_at;
    private object $plan;
    private string $suspended_at;
    private int $private_gists;
    private int $total_private_repos;
    private int $owned_private_repos;
    private int $disk_usage;
    private int $collaborators;
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
    public function site_admin() : bool
    {
        return $this->site_admin;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function company() : string
    {
        return $this->company;
    }
    public function blog() : string
    {
        return $this->blog;
    }
    public function location() : string
    {
        return $this->location;
    }
    public function email() : string
    {
        return $this->email;
    }
    public function hireable() : bool
    {
        return $this->hireable;
    }
    public function bio() : string
    {
        return $this->bio;
    }
    public function public_repos() : int
    {
        return $this->public_repos;
    }
    public function public_gists() : int
    {
        return $this->public_gists;
    }
    public function followers() : int
    {
        return $this->followers;
    }
    public function following() : int
    {
        return $this->following;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function plan() : object
    {
        return $this->plan;
    }
    public function suspended_at() : string
    {
        return $this->suspended_at;
    }
    public function private_gists() : int
    {
        return $this->private_gists;
    }
    public function total_private_repos() : int
    {
        return $this->total_private_repos;
    }
    public function owned_private_repos() : int
    {
        return $this->owned_private_repos;
    }
    public function disk_usage() : int
    {
        return $this->disk_usage;
    }
    public function collaborators() : int
    {
        return $this->collaborators;
    }
}
