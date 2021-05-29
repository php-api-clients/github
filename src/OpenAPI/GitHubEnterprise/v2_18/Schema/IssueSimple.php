<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class IssueSimple
{
    public const SCHEMA_TITLE       = 'Issue Simple';
    public const SCHEMA_DESCRIPTION = 'Issue Simple';
    private int $id;
    private string $node_id;
    private string $url;
    private string $repository_url;
    private string $labels_url;
    private string $comments_url;
    private string $events_url;
    private string $html_url;
    private int $number;
    private string $state;
    private string $title;
    private string $body;
    private $user;
    private array $labels = [];
    private $assignee;
    private array $assignees = [];
    private $milestone;
    private bool $locked;
    private string $active_lock_reason;
    private int $comments;
    private array $pull_request = [];
    private string $closed_at;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private string $body_html;
    private string $body_text;
    private string $timeline_url;
    /**
     * A git repository
     *
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\Repository::class)
     */
    private Repository $repository = [];
    private $performed_via_github_app;

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

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

    public function number(): int
    {
        return $this->number;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function user()
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

    public function assignee()
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

    public function milestone()
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

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
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

    public function performed_via_github_app()
    {
        return $this->performed_via_github_app;
    }
}
