<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\UserSearchResultItem\TextMatches;

final class UserSearchResultItem
{
    public const SCHEMA_TITLE       = 'User Search Result Item';
    public const SCHEMA_DESCRIPTION = 'User Search Result Item';
    private string $login;
    private int $id;
    private string $node_id;
    private string $avatar_url;
    private string $gravatar_id;
    private string $url;
    private string $html_url;
    private string $followers_url;
    private string $subscriptions_url;
    private string $organizations_url;
    private string $repos_url;
    private string $received_events_url;
    private string $type;
    private number $score;
    private string $following_url;
    private string $gists_url;
    private string $starred_url;
    private string $events_url;
    private int $public_repos;
    private int $public_gists;
    private int $followers;
    private int $following;
    private string $created_at;
    private string $updated_at;
    private string $name;
    private string $bio;
    private string $email;
    private string $location;
    private bool $site_admin;
    private bool $hireable;
    /**
     * @var array<TextMatches>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema\UserSearchResultItem\TextMatches::class)
     */
    private array $text_matches = [];
    private string $blog;
    private string $company;
    private string $suspended_at;

    public function login(): string
    {
        return $this->login;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function avatar_url(): string
    {
        return $this->avatar_url;
    }

    public function gravatar_id(): string
    {
        return $this->gravatar_id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function followers_url(): string
    {
        return $this->followers_url;
    }

    public function subscriptions_url(): string
    {
        return $this->subscriptions_url;
    }

    public function organizations_url(): string
    {
        return $this->organizations_url;
    }

    public function repos_url(): string
    {
        return $this->repos_url;
    }

    public function received_events_url(): string
    {
        return $this->received_events_url;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function score(): number
    {
        return $this->score;
    }

    public function following_url(): string
    {
        return $this->following_url;
    }

    public function gists_url(): string
    {
        return $this->gists_url;
    }

    public function starred_url(): string
    {
        return $this->starred_url;
    }

    public function events_url(): string
    {
        return $this->events_url;
    }

    public function public_repos(): int
    {
        return $this->public_repos;
    }

    public function public_gists(): int
    {
        return $this->public_gists;
    }

    public function followers(): int
    {
        return $this->followers;
    }

    public function following(): int
    {
        return $this->following;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function bio(): string
    {
        return $this->bio;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function location(): string
    {
        return $this->location;
    }

    public function site_admin(): bool
    {
        return $this->site_admin;
    }

    public function hireable(): bool
    {
        return $this->hireable;
    }

    /**
     * @return array<TextMatches>
     */
    public function text_matches(): array
    {
        return $this->text_matches;
    }

    public function blog(): string
    {
        return $this->blog;
    }

    public function company(): string
    {
        return $this->company;
    }

    public function suspended_at(): string
    {
        return $this->suspended_at;
    }
}
