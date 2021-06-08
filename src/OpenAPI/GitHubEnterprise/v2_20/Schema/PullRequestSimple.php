<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\PullRequestSimple\Labels;

final class PullRequestSimple
{
    public const SCHEMA_TITLE       = 'Pull Request Simple';
    public const SCHEMA_DESCRIPTION = 'Pull Request Simple';
    private string $url;
    private int $id;
    private string $node_id;
    private string $html_url;
    private string $diff_url;
    private string $patch_url;
    private string $issue_url;
    private string $commits_url;
    private string $review_comments_url;
    private string $review_comment_url;
    private string $comments_url;
    private string $statuses_url;
    private int $number;
    private string $state;
    private bool $locked;
    private string $title;
    private $user;
    private string $body;
    /**
     * @var array<Labels>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\PullRequestSimple\Labels::class)
     */
    private array $labels = [];
    private $milestone;
    private string $active_lock_reason;
    private string $created_at;
    private string $updated_at;
    private string $closed_at;
    private string $merged_at;
    private string $merge_commit_sha;
    private $assignee;
    /**
     * @var array<SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\SimpleUser::class)
     */
    private array $assignees = [];
    /**
     * @var array<SimpleUser>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\SimpleUser::class)
     */
    private array $requested_reviewers = [];
    /**
     * @var array<TeamSimple>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\TeamSimple::class)
     */
    private array $requested_teams = [];
    private array $head            = [];
    private array $base            = [];
    private array $_links          = [];
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private bool $draft;

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

    public function number(): int
    {
        return $this->number;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function locked(): bool
    {
        return $this->locked;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function user()
    {
        return $this->user;
    }

    public function body(): string
    {
        return $this->body;
    }

    /**
     * @return array<Labels>
     */
    public function labels(): array
    {
        return $this->labels;
    }

    public function milestone()
    {
        return $this->milestone;
    }

    public function active_lock_reason(): string
    {
        return $this->active_lock_reason;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function closed_at(): string
    {
        return $this->closed_at;
    }

    public function merged_at(): string
    {
        return $this->merged_at;
    }

    public function merge_commit_sha(): string
    {
        return $this->merge_commit_sha;
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

    /**
     * @return array<SimpleUser>
     */
    public function requested_reviewers(): array
    {
        return $this->requested_reviewers;
    }

    /**
     * @return array<TeamSimple>
     */
    public function requested_teams(): array
    {
        return $this->requested_teams;
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

    /**
     * Indicates whether or not the pull request is a draft.
     */
    public function draft(): bool
    {
        return $this->draft;
    }
}
