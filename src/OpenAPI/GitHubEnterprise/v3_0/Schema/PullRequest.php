<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema\PullRequest\Labels;

final class PullRequest
{
    public const SCHEMA_TITLE            = 'Pull Request';
    public const SCHEMA_DESCRIPTION      = 'Pull requests let you tell others about changes you\'ve pushed to a repository on GitHub. Once a pull request is sent, interested parties can review the set of changes, discuss potential modifications, and even push follow-up commits if necessary.';
    private ?string $url                 = null;
    private ?int $id                     = null;
    private ?string $node_id             = null;
    private ?string $html_url            = null;
    private ?string $diff_url            = null;
    private ?string $patch_url           = null;
    private ?string $issue_url           = null;
    private ?string $commits_url         = null;
    private ?string $review_comments_url = null;
    private ?string $review_comment_url  = null;
    private ?string $comments_url        = null;
    private ?string $statuses_url        = null;
    /**
     * Number uniquely identifying the pull request within its repository.
     */
    private ?int $number = null;
    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    private ?string $state = null;
    private ?bool $locked  = null;
    /**
     * The title of the pull request.
     */
    private ?string $title = null;
    private $user;
    private ?string $body = null;
    private array $labels = [];
    private $milestone;
    private ?string $active_lock_reason = null;
    private ?string $created_at         = null;
    private ?string $updated_at         = null;
    private ?string $closed_at          = null;
    private ?string $merged_at          = null;
    private ?string $merge_commit_sha   = null;
    private $assignee;
    private array $assignees           = [];
    private array $requested_reviewers = [];
    private array $requested_teams     = [];
    private array $head                = [];
    private array $base                = [];
    private array $_links              = [];
    /**
     * How the author is associated with the repository.
     */
    private ?string $author_association = null;
    /**
     * Indicates whether or not the pull request is a draft.
     */
    private ?bool $draft             = null;
    private ?bool $merged            = null;
    private ?bool $mergeable         = null;
    private ?bool $rebaseable        = null;
    private ?string $mergeable_state = null;
    private $merged_by;
    private ?int $comments        = null;
    private ?int $review_comments = null;
    /**
     * Indicates whether maintainers can modify the pull request.
     */
    private ?bool $maintainer_can_modify = null;
    private ?int $commits                = null;
    private ?int $additions              = null;
    private ?int $deletions              = null;
    private ?int $changed_files          = null;

    public function url(): ?string
    {
        return $this->url;
    }

    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function diff_url(): ?string
    {
        return $this->diff_url;
    }

    public function patch_url(): ?string
    {
        return $this->patch_url;
    }

    public function issue_url(): ?string
    {
        return $this->issue_url;
    }

    public function commits_url(): ?string
    {
        return $this->commits_url;
    }

    public function review_comments_url(): ?string
    {
        return $this->review_comments_url;
    }

    public function review_comment_url(): ?string
    {
        return $this->review_comment_url;
    }

    public function comments_url(): ?string
    {
        return $this->comments_url;
    }

    public function statuses_url(): ?string
    {
        return $this->statuses_url;
    }

    /**
     * Number uniquely identifying the pull request within its repository.
     */
    public function number(): ?int
    {
        return $this->number;
    }

    /**
     * State of this Pull Request. Either `open` or `closed`.
     */
    public function state(): ?string
    {
        return $this->state;
    }

    public function locked(): ?bool
    {
        return $this->locked;
    }

    /**
     * The title of the pull request.
     */
    public function title(): ?string
    {
        return $this->title;
    }

    public function user()
    {
        return $this->user;
    }

    public function body(): ?string
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

    public function active_lock_reason(): ?string
    {
        return $this->active_lock_reason;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function closed_at(): ?string
    {
        return $this->closed_at;
    }

    public function merged_at(): ?string
    {
        return $this->merged_at;
    }

    public function merge_commit_sha(): ?string
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
    public function author_association(): ?string
    {
        return $this->author_association;
    }

    /**
     * Indicates whether or not the pull request is a draft.
     */
    public function draft(): ?bool
    {
        return $this->draft;
    }

    public function merged(): ?bool
    {
        return $this->merged;
    }

    public function mergeable(): ?bool
    {
        return $this->mergeable;
    }

    public function rebaseable(): ?bool
    {
        return $this->rebaseable;
    }

    public function mergeable_state(): ?string
    {
        return $this->mergeable_state;
    }

    public function merged_by()
    {
        return $this->merged_by;
    }

    public function comments(): ?int
    {
        return $this->comments;
    }

    public function review_comments(): ?int
    {
        return $this->review_comments;
    }

    /**
     * Indicates whether maintainers can modify the pull request.
     */
    public function maintainer_can_modify(): ?bool
    {
        return $this->maintainer_can_modify;
    }

    public function commits(): ?int
    {
        return $this->commits;
    }

    public function additions(): ?int
    {
        return $this->additions;
    }

    public function deletions(): ?int
    {
        return $this->deletions;
    }

    public function changed_files(): ?int
    {
        return $this->changed_files;
    }
}
