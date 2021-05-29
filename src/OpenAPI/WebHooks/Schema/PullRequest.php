<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class PullRequest
{
    public const SCHEMA_TITLE       = 'Pull Request';
    public const SCHEMA_DESCRIPTION = '';
    private string $url;
    private int $id;
    private string $node_id;
    private string $html_url;
    private string $diff_url;
    private string $patch_url;
    private string $issue_url;
    /**
     * Number uniquely identifying the pull request within its repository.
     */
    private int $number;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    private string $state;
    private bool $locked;
    /**
     * The title of the pull request.
     */
    private string $title;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $user = [];
    private string $body;
    private string $created_at;
    private string $updated_at;
    private $closed_at;
    private $merged_at;
    private $merge_commit_sha;
    private $assignee;
    private array $assignees           = [];
    private array $requested_reviewers = [];
    private array $requested_teams     = [];
    private array $labels              = [];
    private $milestone;
    private string $commits_url;
    private string $review_comments_url;
    private string $review_comment_url;
    private string $comments_url;
    private string $statuses_url;
    private array $head   = [];
    private array $base   = [];
    private array $_links = [];
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private null $auto_merge;
    private $active_lock_reason;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private bool $draft;
    private $merged;
    private $mergeable;
    private $rebaseable;
    private string $mergeable_state;
    private $merged_by;
    private int $comments;
    private int $review_comments;
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    private bool $maintainer_can_modify;
    private int $commits;
    private int $additions;
    private int $deletions;
    private int $changed_files;

    public function url(): string
    {
        return $this->url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function diff_url(): string
    {
        return $this->diff_url;
    }

    public function patch_url(): string
    {
        return $this->patch_url;
    }

    public function issue_url(): string
    {
        return $this->issue_url;
    }

    /**
     * Number uniquely identifying the pull request within its repository.
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    public function state(): string
    {
        return $this->state;
    }

    public function locked(): bool
    {
        return $this->locked;
    }

    /**
     * The title of the pull request.
     */
    public function title(): string
    {
        return $this->title;
    }

    public function user(): User
    {
        return $this->user;
    }

    public function body(): string
    {
        return $this->body;
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

    public function merged_at()
    {
        return $this->merged_at;
    }

    public function merge_commit_sha()
    {
        return $this->merge_commit_sha;
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

    public function requested_reviewers(): array
    {
        return $this->requested_reviewers;
    }

    /**
     * @return array<Team>
     */
    public function requested_teams(): array
    {
        return $this->requested_teams;
    }

    /**
     * @return array<Label>
     */
    public function labels(): array
    {
        return $this->labels;
    }

    public function milestone()
    {
        return $this->milestone;
    }

    public function commits_url(): string
    {
        return $this->commits_url;
    }

    public function review_comments_url(): string
    {
        return $this->review_comments_url;
    }

    public function review_comment_url(): string
    {
        return $this->review_comment_url;
    }

    public function comments_url(): string
    {
        return $this->comments_url;
    }

    public function statuses_url(): string
    {
        return $this->statuses_url;
    }

    public function head(): array
    {
        return $this->head;
    }

    public function base(): array
    {
        return $this->base;
    }

    public function _links(): array
    {
        return $this->_links;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function auto_merge(): null
    {
        return $this->auto_merge;
    }

    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }

    /**
     * Indicates whether or not the pull request is a draft.
     */
    public function draft(): bool
    {
        return $this->draft;
    }

    public function merged()
    {
        return $this->merged;
    }

    public function mergeable()
    {
        return $this->mergeable;
    }

    public function rebaseable()
    {
        return $this->rebaseable;
    }

    public function mergeable_state(): string
    {
        return $this->mergeable_state;
    }

    public function merged_by()
    {
        return $this->merged_by;
    }

    public function comments(): int
    {
        return $this->comments;
    }

    public function review_comments(): int
    {
        return $this->review_comments;
    }

    /**
     * Indicates whether maintainers can modify the pull request.
     */
    public function maintainer_can_modify(): bool
    {
        return $this->maintainer_can_modify;
    }

    public function commits(): int
    {
        return $this->commits;
    }

    public function additions(): int
    {
        return $this->additions;
    }

    public function deletions(): int
    {
        return $this->deletions;
    }

    public function changed_files(): int
    {
        return $this->changed_files;
    }
}
