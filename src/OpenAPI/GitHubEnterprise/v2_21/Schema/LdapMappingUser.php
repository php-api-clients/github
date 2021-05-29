<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class LdapMappingUser
{
    public const SCHEMA_TITLE                = 'Ldap Private User';
    public const SCHEMA_DESCRIPTION          = 'Ldap Private User';
    private ?string $ldap_dn                 = null;
    private ?string $login                   = null;
    private ?int $id                         = null;
    private ?string $node_id                 = null;
    private ?string $avatar_url              = null;
    private ?string $gravatar_id             = null;
    private ?string $url                     = null;
    private ?string $html_url                = null;
    private ?string $followers_url           = null;
    private ?string $following_url           = null;
    private ?string $gists_url               = null;
    private ?string $starred_url             = null;
    private ?string $subscriptions_url       = null;
    private ?string $organizations_url       = null;
    private ?string $repos_url               = null;
    private ?string $events_url              = null;
    private ?string $received_events_url     = null;
    private ?string $type                    = null;
    private ?bool $site_admin                = null;
    private ?string $name                    = null;
    private ?string $company                 = null;
    private ?string $blog                    = null;
    private ?string $location                = null;
    private ?string $email                   = null;
    private ?bool $hireable                  = null;
    private ?string $bio                     = null;
    private ?string $twitter_username        = null;
    private ?int $public_repos               = null;
    private ?int $public_gists               = null;
    private ?int $followers                  = null;
    private ?int $following                  = null;
    private ?string $created_at              = null;
    private ?string $updated_at              = null;
    private ?int $private_gists              = null;
    private ?int $total_private_repos        = null;
    private ?int $owned_private_repos        = null;
    private ?int $disk_usage                 = null;
    private ?int $collaborators              = null;
    private ?bool $two_factor_authentication = null;
    private array $plan                      = [];
    private ?string $suspended_at            = null;
    private ?bool $business_plus             = null;

    public function ldap_dn(): ?string
    {
        return $this->ldap_dn;
    }

    public function login(): ?string
    {
        return $this->login;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function avatar_url(): ?string
    {
        return $this->avatar_url;
    }

    public function gravatar_id(): ?string
    {
        return $this->gravatar_id;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function followers_url(): ?string
    {
        return $this->followers_url;
    }

    public function following_url(): ?string
    {
        return $this->following_url;
    }

    public function gists_url(): ?string
    {
        return $this->gists_url;
    }

    public function starred_url(): ?string
    {
        return $this->starred_url;
    }

    public function subscriptions_url(): ?string
    {
        return $this->subscriptions_url;
    }

    public function organizations_url(): ?string
    {
        return $this->organizations_url;
    }

    public function repos_url(): ?string
    {
        return $this->repos_url;
    }

    public function events_url(): ?string
    {
        return $this->events_url;
    }

    public function received_events_url(): ?string
    {
        return $this->received_events_url;
    }

    public function type(): ?string
    {
        return $this->type;
    }

    public function site_admin(): ?bool
    {
        return $this->site_admin;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function company(): ?string
    {
        return $this->company;
    }

    public function blog(): ?string
    {
        return $this->blog;
    }

    public function location(): ?string
    {
        return $this->location;
    }

    public function email(): ?string
    {
        return $this->email;
    }

    public function hireable(): ?bool
    {
        return $this->hireable;
    }

    public function bio(): ?string
    {
        return $this->bio;
    }

    public function twitter_username(): ?string
    {
        return $this->twitter_username;
    }

    public function public_repos(): ?int
    {
        return $this->public_repos;
    }

    public function public_gists(): ?int
    {
        return $this->public_gists;
    }

    public function followers(): ?int
    {
        return $this->followers;
    }

    public function following(): ?int
    {
        return $this->following;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function private_gists(): ?int
    {
        return $this->private_gists;
    }

    public function total_private_repos(): ?int
    {
        return $this->total_private_repos;
    }

    public function owned_private_repos(): ?int
    {
        return $this->owned_private_repos;
    }

    public function disk_usage(): ?int
    {
        return $this->disk_usage;
    }

    public function collaborators(): ?int
    {
        return $this->collaborators;
    }

    public function two_factor_authentication(): ?bool
    {
        return $this->two_factor_authentication;
    }

    public function plan(): array
    {
        return $this->plan;
    }

    public function suspended_at(): ?string
    {
        return $this->suspended_at;
    }

    public function business_plus(): ?bool
    {
        return $this->business_plus;
    }
}
