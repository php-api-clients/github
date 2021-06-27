<?php

declare(strict_types=1);

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
    protected string $url;

    protected int $id;

    protected string $html_url;

    protected int $number;

    protected string $state;

    protected bool $locked;

    protected string $title;

    protected User $user;

    protected string $body;

    protected Label $labels;

    protected Repository\Milestone $milestone;

    protected string $active_lock_reason;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    protected DateTimeInterface $closed_at;

    protected DateTimeInterface $merged_at;

    protected string $merge_commit_sha;

    protected User $assignee;

    protected User $assignees;

    protected User $requested_reviewers;

    protected Repository\PullRequest\Rb $head;

    protected Repository\PullRequest\Rb $base;

    protected string $author_association;

    protected bool $draft;

    protected bool $merged;

    protected bool $mergeable;

    protected bool $rebaseable;

    protected string $mergeable_state;

    protected User $merged_by;

    protected int $comments;

    protected int $review_comments;

    protected bool $maintainer_can_modify;

    protected int $commits;

    protected int $additions;

    protected int $deletions;

    protected int $changed_files;

    public function url(): string
    {
        return $this->url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function htmlUrl(): string
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

    public function locked(): bool
    {
        return $this->locked;
    }

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

    public function labels(): Label
    {
        return $this->labels;
    }

    public function milestone(): Repository\Milestone
    {
        return $this->milestone;
    }

    public function activeLockReason(): string
    {
        return $this->active_lock_reason;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    public function closedAt(): DateTimeInterface
    {
        return $this->closed_at;
    }

    public function mergedAt(): DateTimeInterface
    {
        return $this->merged_at;
    }

    public function mergeCommitSha(): string
    {
        return $this->merge_commit_sha;
    }

    public function assignee(): User
    {
        return $this->assignee;
    }

    public function assignees(): User
    {
        return $this->assignees;
    }

    public function requestedReviewers(): User
    {
        return $this->requested_reviewers;
    }

    public function head(): Repository\PullRequest\Rb
    {
        return $this->head;
    }

    public function base(): Repository\PullRequest\Rb
    {
        return $this->base;
    }

    public function authorAssociation(): string
    {
        return $this->author_association;
    }

    public function draft(): bool
    {
        return $this->draft;
    }

    public function merged(): bool
    {
        return $this->merged;
    }

    public function mergeable(): bool
    {
        return $this->mergeable;
    }

    public function rebaseable(): bool
    {
        return $this->rebaseable;
    }

    public function mergeableState(): string
    {
        return $this->mergeable_state;
    }

    public function mergedBy(): User
    {
        return $this->merged_by;
    }

    public function comments(): int
    {
        return $this->comments;
    }

    public function reviewComments(): int
    {
        return $this->review_comments;
    }

    public function maintainerCanModify(): bool
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

    public function changedFiles(): int
    {
        return $this->changed_files;
    }
}
