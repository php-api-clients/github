<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyPullRequest implements PullRequestInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function url(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function id(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return null;
    }

    /**
     * @return int
     */
    public function number(): int
    {
        return null;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function locked(): bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return null;
    }

    /**
     * @return string
     */
    public function body(): string
    {
        return null;
    }

    /**
     * @return Label
     */
    public function labels(): Label
    {
        return null;
    }

    /**
     * @return Repository\Milestone
     */
    public function milestone(): Repository\Milestone
    {
        return null;
    }

    /**
     * @return string
     */
    public function activeLockReason(): string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function closedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function mergedAt(): DateTimeInterface
    {
        return null;
    }

    /**
     * @return string
     */
    public function mergeCommitSha(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function assignee(): User
    {
        return null;
    }

    /**
     * @return User
     */
    public function assignees(): User
    {
        return null;
    }

    /**
     * @return User
     */
    public function requestedReviewers(): User
    {
        return null;
    }

    /**
     * @return Repository\PullRequest\Rb
     */
    public function head(): Repository\PullRequest\Rb
    {
        return null;
    }

    /**
     * @return Repository\PullRequest\Rb
     */
    public function base(): Repository\PullRequest\Rb
    {
        return null;
    }

    /**
     * @return string
     */
    public function authorAssociation(): string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function draft(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function merged(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function mergeable(): bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function rebaseable(): bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function mergeableState(): string
    {
        return null;
    }

    /**
     * @return User
     */
    public function mergedBy(): User
    {
        return null;
    }

    /**
     * @return int
     */
    public function comments(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function reviewComments(): int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function maintainerCanModify(): bool
    {
        return null;
    }

    /**
     * @return int
     */
    public function commits(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function additions(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function deletions(): int
    {
        return null;
    }

    /**
     * @return int
     */
    public function changedFiles(): int
    {
        return null;
    }
}
