<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Forks;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\History;

final class GistSimple
{
    public const SCHEMA_TITLE       = 'Gist Simple';
    public const SCHEMA_DESCRIPTION = 'Gist Simple';
    /**
     * @var array<Forks>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\Forks::class)
     */
    private array $forks = [];
    /**
     * @var array<History>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\GistSimple\History::class)
     */
    private array $history = [];
    /**
     * Gist
     */
    private array $fork_of        = [];
    private ?string $url          = null;
    private ?string $forks_url    = null;
    private ?string $commits_url  = null;
    private ?string $id           = null;
    private ?string $node_id      = null;
    private ?string $git_pull_url = null;
    private ?string $git_push_url = null;
    private ?string $html_url     = null;
    private array $files          = [];
    private ?bool $public         = null;
    private ?string $created_at   = null;
    private ?string $updated_at   = null;
    private ?string $description  = null;
    private ?int $comments        = null;
    private ?string $user         = null;
    private ?string $comments_url = null;
    /**
     * Simple User
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private ?SimpleUser $owner = null;
    private ?bool $truncated   = null;

    public function forks(): array
    {
        return $this->forks;
    }

    public function history(): array
    {
        return $this->history;
    }

    public function fork_of(): array
    {
        return $this->fork_of;
    }

    public function url(): ?string
    {
        return $this->url;
    }

    public function forks_url(): ?string
    {
        return $this->forks_url;
    }

    public function commits_url(): ?string
    {
        return $this->commits_url;
    }

    public function id(): ?string
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function git_pull_url(): ?string
    {
        return $this->git_pull_url;
    }

    public function git_push_url(): ?string
    {
        return $this->git_push_url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function files(): array
    {
        return $this->files;
    }

    public function public(): ?bool
    {
        return $this->public;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function comments(): ?int
    {
        return $this->comments;
    }

    public function user(): ?string
    {
        return $this->user;
    }

    public function comments_url(): ?string
    {
        return $this->comments_url;
    }

    public function owner(): ?SimpleUser
    {
        return $this->owner;
    }

    public function truncated(): ?bool
    {
        return $this->truncated;
    }
}
