<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Issue
{
    public const SCHEMA_TITLE       = 'Issue';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * URL for the issue
     */
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    private int $id;
    private string $node_id;
    private int $number;
    /**
     * Title of the issue
     */
    private string $title;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $user    = [];
    private array $labels = [];
    /**
     * State of the issue; either 'open' or 'closed'
     */
    private string $state;
    private bool $locked;
    private $assignee;
    private array $assignees = [];
    private $milestone;
    private int $comments;
    private string $created_at;
    private string $updated_at;
    private $closed_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private $active_lock_reason;
    private $performed_via_github_app;
    private array $pull_request = [];
    /**
     * Contents of the issue
     */
    private $body;

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

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function number(): int
    {
        return $this->number;
    }

    /**
     * Title of the issue
     */
    public function title(): string
    {
        return $this->title;
    }

    public function user(): User
    {
        return $this->user;
    }

    /**
     * @return array<Label>
     */
    public function labels(): array
    {
        return $this->labels;
    }

    /**
     * State of the issue; either 'open' or 'closed'
     */
    public function state(): string
    {
        return $this->state;
    }

    public function locked(): bool
    {
        return $this->locked;
    }

    public function assignee()
    {
        return $this->assignee;
    }

    /**
     * @return array<User>
     */
    public function assignees(): array
    {
        return $this->assignees;
    }

    public function milestone()
    {
        return $this->milestone;
    }

    public function comments(): int
    {
        return $this->comments;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function closed_at()
    {
        return $this->closed_at;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }

    public function pull_request(): array
    {
        return $this->pull_request;
    }

    /**
     * Contents of the issue
     */
    public function body()
    {
        return $this->body;
    }
}
