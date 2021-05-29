<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyPullRequest implements PullRequestInterface, EmptyResourceInterface
{
    public function url(): string
    {
        return null;
    }

    public function id(): int
    {
        return null;
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function number(): int
    {
        return null;
    }

    public function state(): string
    {
        return null;
    }

    public function locked(): bool
    {
        return null;
    }

    public function title(): string
    {
        return null;
    }

    public function user(): User
    {
        return null;
    }

    public function body(): string
    {
        return null;
    }

    public function labels(): Label
    {
        return null;
    }

    public function milestone(): Repository\Milestone
    {
        return null;
    }

    public function activeLockReason(): string
    {
        return null;
    }

    public function createdAt(): DateTimeInterface
    {
        return null;
    }

    public function updatedAt(): DateTimeInterface
    {
        return null;
    }

    public function closedAt(): DateTimeInterface
    {
        return null;
    }

    public function mergedAt(): DateTimeInterface
    {
        return null;
    }

    public function mergeCommitSha(): string
    {
        return null;
    }

    public function assignee(): User
    {
        return null;
    }

    public function assignees(): User
    {
        return null;
    }

    public function requestedReviewers(): User
    {
        return null;
    }

    public function head(): Repository\PullRequest\Rb
    {
        return null;
    }

    public function base(): Repository\PullRequest\Rb
    {
        return null;
    }

    public function authorAssociation(): string
    {
        return null;
    }

    public function draft(): bool
    {
        return null;
    }

    public function merged(): bool
    {
        return null;
    }

    public function mergeable(): bool
    {
        return null;
    }

    public function rebaseable(): bool
    {
        return null;
    }

    public function mergeableState(): string
    {
        return null;
    }

    public function mergedBy(): User
    {
        return null;
    }

    public function comments(): int
    {
        return null;
    }

    public function reviewComments(): int
    {
        return null;
    }

    public function maintainerCanModify(): bool
    {
        return null;
    }

    public function commits(): int
    {
        return null;
    }

    public function additions(): int
    {
        return null;
    }

    public function deletions(): int
    {
        return null;
    }

    public function changedFiles(): int
    {
        return null;
    }
}
