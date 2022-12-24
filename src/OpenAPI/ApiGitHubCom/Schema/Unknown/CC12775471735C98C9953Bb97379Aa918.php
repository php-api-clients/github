<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CC12775471735C98C9953Bb97379Aa918
{
    public const SCHEMA_JSON = '{"required":["id","node_id","avatar_url","html_url"],"type":"object","properties":{"avatar_url":{"type":"string"},"created_at":{"type":"string"},"description":{"type":["null"]},"events_url":{"type":"string"},"followers":{"type":"integer"},"followers_url":{"type":"string"},"following":{"type":"integer"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"has_organization_projects":{"type":"boolean"},"has_repository_projects":{"type":"boolean"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"is_verified":{"type":"boolean"},"issues_url":{"type":"string"},"login":{"type":"string"},"members_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"public_gists":{"type":"integer"},"public_members_url":{"type":"string"},"public_repos":{"type":"integer"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"slug":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"website_url":{"type":["null"]}}}';
    public const SCHEMA_TITLE = 'c_c12775471735c98c9953bb97379aa918';
    public const SCHEMA_DESCRIPTION = '';
    private string $avatar_url;
    private ?string $created_at = null;
    private $description;
    private ?string $events_url = null;
    private ?int $followers = null;
    private ?string $followers_url = null;
    private ?int $following = null;
    private ?string $following_url = null;
    private ?string $gists_url = null;
    private ?string $gravatar_id = null;
    private ?bool $has_organization_projects = null;
    private ?bool $has_repository_projects = null;
    private ?string $hooks_url = null;
    private string $html_url;
    private int $id;
    private ?bool $is_verified = null;
    private ?string $issues_url = null;
    private ?string $login = null;
    private ?string $members_url = null;
    private ?string $name = null;
    private string $node_id;
    private ?string $organizations_url = null;
    private ?int $public_gists = null;
    private ?string $public_members_url = null;
    private ?int $public_repos = null;
    private ?string $received_events_url = null;
    private ?string $repos_url = null;
    private ?bool $site_admin = null;
    private ?string $slug = null;
    private ?string $starred_url = null;
    private ?string $subscriptions_url = null;
    private ?string $type = null;
    private ?string $updated_at = null;
    private ?string $url = null;
    private $website_url;
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function description()
    {
        return $this->description;
    }
    public function events_url() : ?string
    {
        return $this->events_url;
    }
    public function followers() : ?int
    {
        return $this->followers;
    }
    public function followers_url() : ?string
    {
        return $this->followers_url;
    }
    public function following() : ?int
    {
        return $this->following;
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
    public function has_organization_projects() : ?bool
    {
        return $this->has_organization_projects;
    }
    public function has_repository_projects() : ?bool
    {
        return $this->has_repository_projects;
    }
    public function hooks_url() : ?string
    {
        return $this->hooks_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function id() : int
    {
        return $this->id;
    }
    public function is_verified() : ?bool
    {
        return $this->is_verified;
    }
    public function issues_url() : ?string
    {
        return $this->issues_url;
    }
    public function login() : ?string
    {
        return $this->login;
    }
    public function members_url() : ?string
    {
        return $this->members_url;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function organizations_url() : ?string
    {
        return $this->organizations_url;
    }
    public function public_gists() : ?int
    {
        return $this->public_gists;
    }
    public function public_members_url() : ?string
    {
        return $this->public_members_url;
    }
    public function public_repos() : ?int
    {
        return $this->public_repos;
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
    public function slug() : ?string
    {
        return $this->slug;
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
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function website_url()
    {
        return $this->website_url;
    }
}
