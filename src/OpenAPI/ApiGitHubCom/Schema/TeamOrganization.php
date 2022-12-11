<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class TeamOrganization
{
    public const SCHEMA_TITLE = 'Team Organization';
    public const SCHEMA_DESCRIPTION = 'Team Organization';
    private string $login;
    private int $id;
    private string $node_id;
    private string $url;
    private string $repos_url;
    private string $events_url;
    private string $hooks_url;
    private string $issues_url;
    private string $members_url;
    private string $public_members_url;
    private string $avatar_url;
    private $description;
    private ?string $name = null;
    private ?string $company = null;
    private ?string $blog = null;
    private ?string $location = null;
    private ?string $email = null;
    private $twitter_username;
    private ?bool $is_verified = null;
    private bool $has_organization_projects;
    private bool $has_repository_projects;
    private int $public_repos;
    private int $public_gists;
    private int $followers;
    private int $following;
    private string $html_url;
    private string $created_at;
    private string $type;
    private ?int $total_private_repos = null;
    private ?int $owned_private_repos = null;
    private $private_gists;
    private $disk_usage;
    private $collaborators;
    private $billing_email;
    private array $plan = array();
    private $default_repository_permission;
    private $members_can_create_repositories;
    private $two_factor_requirement_enabled;
    private ?string $members_allowed_repository_creation_type = null;
    private ?bool $members_can_create_public_repositories = null;
    private ?bool $members_can_create_private_repositories = null;
    private ?bool $members_can_create_internal_repositories = null;
    private ?bool $members_can_create_pages = null;
    private ?bool $members_can_create_public_pages = null;
    private ?bool $members_can_create_private_pages = null;
    private $members_can_fork_private_repositories;
    private ?bool $web_commit_signoff_required = null;
    private string $updated_at;
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
    public function url() : string
    {
        return $this->url;
    }
    public function repos_url() : string
    {
        return $this->repos_url;
    }
    public function events_url() : string
    {
        return $this->events_url;
    }
    public function hooks_url() : string
    {
        return $this->hooks_url;
    }
    public function issues_url() : string
    {
        return $this->issues_url;
    }
    public function members_url() : string
    {
        return $this->members_url;
    }
    public function public_members_url() : string
    {
        return $this->public_members_url;
    }
    public function avatar_url() : string
    {
        return $this->avatar_url;
    }
    public function description()
    {
        return $this->description;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function company() : ?string
    {
        return $this->company;
    }
    public function blog() : ?string
    {
        return $this->blog;
    }
    public function location() : ?string
    {
        return $this->location;
    }
    public function email() : ?string
    {
        return $this->email;
    }
    public function twitter_username()
    {
        return $this->twitter_username;
    }
    public function is_verified() : ?bool
    {
        return $this->is_verified;
    }
    public function has_organization_projects() : bool
    {
        return $this->has_organization_projects;
    }
    public function has_repository_projects() : bool
    {
        return $this->has_repository_projects;
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
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function total_private_repos() : ?int
    {
        return $this->total_private_repos;
    }
    public function owned_private_repos() : ?int
    {
        return $this->owned_private_repos;
    }
    public function private_gists()
    {
        return $this->private_gists;
    }
    public function disk_usage()
    {
        return $this->disk_usage;
    }
    public function collaborators()
    {
        return $this->collaborators;
    }
    public function billing_email()
    {
        return $this->billing_email;
    }
    public function plan() : array
    {
        return $this->plan;
    }
    public function default_repository_permission()
    {
        return $this->default_repository_permission;
    }
    public function members_can_create_repositories()
    {
        return $this->members_can_create_repositories;
    }
    public function two_factor_requirement_enabled()
    {
        return $this->two_factor_requirement_enabled;
    }
    public function members_allowed_repository_creation_type() : ?string
    {
        return $this->members_allowed_repository_creation_type;
    }
    public function members_can_create_public_repositories() : ?bool
    {
        return $this->members_can_create_public_repositories;
    }
    public function members_can_create_private_repositories() : ?bool
    {
        return $this->members_can_create_private_repositories;
    }
    public function members_can_create_internal_repositories() : ?bool
    {
        return $this->members_can_create_internal_repositories;
    }
    public function members_can_create_pages() : ?bool
    {
        return $this->members_can_create_pages;
    }
    public function members_can_create_public_pages() : ?bool
    {
        return $this->members_can_create_public_pages;
    }
    public function members_can_create_private_pages() : ?bool
    {
        return $this->members_can_create_private_pages;
    }
    public function members_can_fork_private_repositories()
    {
        return $this->members_can_fork_private_repositories;
    }
    public function web_commit_signoff_required() : ?bool
    {
        return $this->web_commit_signoff_required;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
}
