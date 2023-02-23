<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\WebhookInstallationTargetRenamed;

final readonly class Account
{
    public const SCHEMA_JSON = '{"required":["id","node_id","avatar_url","html_url"],"type":"object","properties":{"avatar_url":{"type":"string"},"created_at":{"type":"string"},"description":{"type":["null"]},"events_url":{"type":"string"},"followers":{"type":"integer"},"followers_url":{"type":"string"},"following":{"type":"integer"},"following_url":{"type":"string"},"gists_url":{"type":"string"},"gravatar_id":{"type":"string"},"has_organization_projects":{"type":"boolean"},"has_repository_projects":{"type":"boolean"},"hooks_url":{"type":"string"},"html_url":{"type":"string"},"id":{"type":"integer"},"is_verified":{"type":"boolean"},"issues_url":{"type":"string"},"login":{"type":"string"},"members_url":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string"},"public_gists":{"type":"integer"},"public_members_url":{"type":"string"},"public_repos":{"type":"integer"},"received_events_url":{"type":"string"},"repos_url":{"type":"string"},"site_admin":{"type":"boolean"},"slug":{"type":"string"},"starred_url":{"type":"string"},"subscriptions_url":{"type":"string"},"type":{"type":"string"},"updated_at":{"type":"string"},"url":{"type":"string"},"website_url":{"type":["null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public ?string $avatar_url;
    public string $created_at;
    public mixed $description;
    public string $events_url;
    public int $followers;
    public string $followers_url;
    public int $following;
    public string $following_url;
    public string $gists_url;
    public string $gravatar_id;
    public bool $has_organization_projects;
    public bool $has_repository_projects;
    public string $hooks_url;
    public ?string $html_url;
    public ?int $id;
    public bool $is_verified;
    public string $issues_url;
    public string $login;
    public string $members_url;
    public string $name;
    public ?string $node_id;
    public string $organizations_url;
    public int $public_gists;
    public string $public_members_url;
    public int $public_repos;
    public string $received_events_url;
    public string $repos_url;
    public bool $site_admin;
    public string $slug;
    public string $starred_url;
    public string $subscriptions_url;
    public string $type;
    public string $updated_at;
    public string $url;
    public mixed $website_url;
    public function __construct(string $avatar_url, string $created_at, mixed $description, string $events_url, int $followers, string $followers_url, int $following, string $following_url, string $gists_url, string $gravatar_id, bool $has_organization_projects, bool $has_repository_projects, string $hooks_url, string $html_url, int $id, bool $is_verified, string $issues_url, string $login, string $members_url, string $name, string $node_id, string $organizations_url, int $public_gists, string $public_members_url, int $public_repos, string $received_events_url, string $repos_url, bool $site_admin, string $slug, string $starred_url, string $subscriptions_url, string $type, string $updated_at, string $url, mixed $website_url)
    {
        $this->avatar_url = $avatar_url;
        $this->created_at = $created_at;
        $this->description = $description;
        $this->events_url = $events_url;
        $this->followers = $followers;
        $this->followers_url = $followers_url;
        $this->following = $following;
        $this->following_url = $following_url;
        $this->gists_url = $gists_url;
        $this->gravatar_id = $gravatar_id;
        $this->has_organization_projects = $has_organization_projects;
        $this->has_repository_projects = $has_repository_projects;
        $this->hooks_url = $hooks_url;
        $this->html_url = $html_url;
        $this->id = $id;
        $this->is_verified = $is_verified;
        $this->issues_url = $issues_url;
        $this->login = $login;
        $this->members_url = $members_url;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->organizations_url = $organizations_url;
        $this->public_gists = $public_gists;
        $this->public_members_url = $public_members_url;
        $this->public_repos = $public_repos;
        $this->received_events_url = $received_events_url;
        $this->repos_url = $repos_url;
        $this->site_admin = $site_admin;
        $this->slug = $slug;
        $this->starred_url = $starred_url;
        $this->subscriptions_url = $subscriptions_url;
        $this->type = $type;
        $this->updated_at = $updated_at;
        $this->url = $url;
        $this->website_url = $website_url;
    }
}
