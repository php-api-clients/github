<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Collection(
 *     labels="Label",
 *     assignees="User",
 *     requested_reviewers="User"
 * )
 * @Nested(
 *     user="User",
 *     milestone="Repository\Milestone",
 *     assignee="User",
 *     head="Repository\PullRequest\Rb",
 *     base="Repository\PullRequest\Rb",
 *     merged_by="User"
 * )
 * @EmptyResource("Repository\EmptyPullRequest")
 */
abstract class PullRequest extends AbstractResource implements PullRequestInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @var int
     */
    protected $number;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var bool
     */
    protected $locked;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var Label
     */
    protected $labels;

    /**
     * @var Repository\Milestone
     */
    protected $milestone;

    /**
     * @var string
     */
    protected $active_lock_reason;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var DateTimeInterface
     */
    protected $closed_at;

    /**
     * @var DateTimeInterface
     */
    protected $merged_at;

    /**
     * @var string
     */
    protected $merge_commit_sha;

    /**
     * @var User
     */
    protected $assignee;

    /**
     * @var User
     */
    protected $assignees;

    /**
     * @var User
     */
    protected $requested_reviewers;

    /**
     * @var Repository\PullRequest\Rb
     */
    protected $head;

    /**
     * @var Repository\PullRequest\Rb
     */
    protected $base;

    /**
     * @var string
     */
    protected $author_association;

    /**
     * @var bool
     */
    protected $draft;

    /**
     * @var bool
     */
    protected $merged;

    /**
     * @var bool
     */
    protected $mergeable;

    /**
     * @var bool
     */
    protected $rebaseable;

    /**
     * @var string
     */
    protected $mergeable_state;

    /**
     * @var User
     */
    protected $merged_by;

    /**
     * @var int
     */
    protected $comments;

    /**
     * @var int
     */
    protected $review_comments;

    /**
     * @var bool
     */
    protected $maintainer_can_modify;

    /**
     * @var int
     */
    protected $commits;

    /**
     * @var int
     */
    protected $additions;

    /**
     * @var int
     */
    protected $deletions;

    /**
     * @var int
     */
    protected $changed_files;

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    /**
     * @return int
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * @return bool
     */
    public function locked(): bool
    {
        return $this->locked;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->title;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function body(): string
    {
        return $this->body;
    }

    /**
     * @return Label
     */
    public function labels(): Label
    {
        return $this->labels;
    }

    /**
     * @return Repository\Milestone
     */
    public function milestone(): Repository\Milestone
    {
        return $this->milestone;
    }

    /**
     * @return string
     */
    public function activeLockReason(): string
    {
        return $this->active_lock_reason;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function closedAt(): DateTimeInterface
    {
        return $this->closed_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function mergedAt(): DateTimeInterface
    {
        return $this->merged_at;
    }

    /**
     * @return string
     */
    public function mergeCommitSha(): string
    {
        return $this->merge_commit_sha;
    }

    /**
     * @return User
     */
    public function assignee(): User
    {
        return $this->assignee;
    }

    /**
     * @return User
     */
    public function assignees(): User
    {
        return $this->assignees;
    }

    /**
     * @return User
     */
    public function requestedReviewers(): User
    {
        return $this->requested_reviewers;
    }

    /**
     * @return Repository\PullRequest\Rb
     */
    public function head(): Repository\PullRequest\Rb
    {
        return $this->head;
    }

    /**
     * @return Repository\PullRequest\Rb
     */
    public function base(): Repository\PullRequest\Rb
    {
        return $this->base;
    }

    /**
     * @return string
     */
    public function authorAssociation(): string
    {
        return $this->author_association;
    }

    /**
     * @return bool
     */
    public function draft(): bool
    {
        return $this->draft;
    }

    /**
     * @return bool
     */
    public function merged(): bool
    {
        return $this->merged;
    }

    /**
     * @return bool
     */
    public function mergeable(): bool
    {
        return $this->mergeable;
    }

    /**
     * @return bool
     */
    public function rebaseable(): bool
    {
        return $this->rebaseable;
    }

    /**
     * @return string
     */
    public function mergeableState(): string
    {
        return $this->mergeable_state;
    }

    /**
     * @return User
     */
    public function mergedBy(): User
    {
        return $this->merged_by;
    }

    /**
     * @return int
     */
    public function comments(): int
    {
        return $this->comments;
    }

    /**
     * @return int
     */
    public function reviewComments(): int
    {
        return $this->review_comments;
    }

    /**
     * @return bool
     */
    public function maintainerCanModify(): bool
    {
        return $this->maintainer_can_modify;
    }

    /**
     * @return int
     */
    public function commits(): int
    {
        return $this->commits;
    }

    /**
     * @return int
     */
    public function additions(): int
    {
        return $this->additions;
    }

    /**
     * @return int
     */
    public function deletions(): int
    {
        return $this->deletions;
    }

    /**
     * @return int
     */
    public function changedFiles(): int
    {
        return $this->changed_files;
    }
}
