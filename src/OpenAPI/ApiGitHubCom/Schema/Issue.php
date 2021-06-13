<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Issue
{
    public const SCHEMA_TITLE       = 'Issue';
    public const SCHEMA_DESCRIPTION = 'Issues are a great way to keep track of tasks, enhancements, and bugs for your projects.';
    private int $id;
    private string $node_id;
    /**
     * URL for the issue
     */
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    /**
     * Number uniquely identifying the issue within its repository
     */
    private int $number;
    /**
     * State of the issue; either 'open' or 'closed'
     */
    private string $state;
    /**
     * Title of the issue
     */
    private string $title;
    /**
     * Contents of the issue
     */
    private string $body;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $user;
    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     */
    private array $labels = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $assignee;
    /**
     * @var array<SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private array $assignees = [];
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Milestone::class) */
    private Milestone $milestone;
    private bool $locked;
    private string $active_lock_reason;
    private int $comments;
    private array $pull_request = [];
    private string $closed_at;
    private string $created_at;
    private string $updated_at;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class) */
    private SimpleUser $closed_by;
    private string $body_html;
    private string $body_text;
    private string $timeline_url;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Repository::class)
     */
    private Repository $repository;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Integration::class) */
    private Integration $performed_via_github_app;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ReactionRollup::class) */
    private ReactionRollup $reactions;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * URL for the issue
     */
    public function url(): string
    {
        return $this->url;
    }

    public function repository_url(): string
    {
        return $this->repository_url;
    }

    public function labels_url(): string
    {
        return $this->labels_url;
    }

    public function comments_url(): string
    {
        return $this->comments_url;
    }

    public function events_url(): string
    {
        return $this->events_url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    /**
     * Number uniquely identifying the issue within its repository
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * State of the issue; either 'open' or 'closed'
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * Title of the issue
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * Contents of the issue
     */
    public function body(): string
    {
        return $this->body;
    }

    public function user(): SimpleUser
    {
        return $this->user;
    }

    /**
     * Labels to associate with this issue; pass one or more label names to replace the set of labels on this issue; send an empty array to clear all labels from the issue; note that the labels are silently dropped for users without push access to the repository
     */
    public function labels(): array
    {
        return $this->labels;
    }

    public function assignee(): SimpleUser
    {
        return $this->assignee;
    }

    /**
     * @return array<SimpleUser>
     */
    public function assignees(): array
    {
        return $this->assignees;
    }

    public function milestone(): Milestone
    {
        return $this->milestone;
    }

    public function locked(): bool
    {
        return $this->locked;
    }

    public function active_lock_reason(): string
    {
        return $this->active_lock_reason;
    }

    public function comments(): int
    {
        return $this->comments;
    }

    public function pull_request(): array
    {
        return $this->pull_request;
    }

    public function closed_at(): string
    {
        return $this->closed_at;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function closed_by(): SimpleUser
    {
        return $this->closed_by;
    }

    public function body_html(): string
    {
        return $this->body_html;
    }

    public function body_text(): string
    {
        return $this->body_text;
    }

    public function timeline_url(): string
    {
        return $this->timeline_url;
    }

    /**
     * A git repository
     */
    public function repository(): Repository
    {
        return $this->repository;
    }

    public function performed_via_github_app(): Integration
    {
        return $this->performed_via_github_app;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function reactions(): ReactionRollup
    {
        return $this->reactions;
    }
}
