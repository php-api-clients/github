<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface PullRequestInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\PullRequest';

    public function url(): string;

    public function id(): int;

    public function htmlUrl(): string;

    public function number(): int;

    public function state(): string;

    public function locked(): bool;

    public function title(): string;

    public function user(): User;

    public function body(): string;

    public function labels(): Label;

    public function milestone(): Repository\Milestone;

    public function activeLockReason(): string;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    public function closedAt(): DateTimeInterface;

    public function mergedAt(): DateTimeInterface;

    public function mergeCommitSha(): string;

    public function assignee(): User;

    public function assignees(): User;

    public function requestedReviewers(): User;

    public function head(): Repository\PullRequest\Rb;

    public function base(): Repository\PullRequest\Rb;

    public function authorAssociation(): string;

    public function draft(): bool;

    public function merged(): bool;

    public function mergeable(): bool;

    public function rebaseable(): bool;

    public function mergeableState(): string;

    public function mergedBy(): User;

    public function comments(): int;

    public function reviewComments(): int;

    public function maintainerCanModify(): bool;

    public function commits(): int;

    public function additions(): int;

    public function deletions(): int;

    public function changedFiles(): int;
}
