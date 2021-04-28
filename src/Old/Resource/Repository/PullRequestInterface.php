<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface PullRequestInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\PullRequest';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function htmlUrl(): string;

    /**
     * @return int
     */
    public function number(): int;

    /**
     * @return string
     */
    public function state(): string;

    /**
     * @return bool
     */
    public function locked(): bool;

    /**
     * @return string
     */
    public function title(): string;

    /**
     * @return User
     */
    public function user(): User;

    /**
     * @return string
     */
    public function body(): string;

    /**
     * @return Label
     */
    public function labels(): Label;

    /**
     * @return Repository\Milestone
     */
    public function milestone(): Repository\Milestone;

    /**
     * @return string
     */
    public function activeLockReason(): string;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function closedAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function mergedAt(): DateTimeInterface;

    /**
     * @return string
     */
    public function mergeCommitSha(): string;

    /**
     * @return User
     */
    public function assignee(): User;

    /**
     * @return User
     */
    public function assignees(): User;

    /**
     * @return User
     */
    public function requestedReviewers(): User;

    /**
     * @return Repository\PullRequest\Rb
     */
    public function head(): Repository\PullRequest\Rb;

    /**
     * @return Repository\PullRequest\Rb
     */
    public function base(): Repository\PullRequest\Rb;

    /**
     * @return string
     */
    public function authorAssociation(): string;

    /**
     * @return bool
     */
    public function draft(): bool;

    /**
     * @return bool
     */
    public function merged(): bool;

    /**
     * @return bool
     */
    public function mergeable(): bool;

    /**
     * @return bool
     */
    public function rebaseable(): bool;

    /**
     * @return string
     */
    public function mergeableState(): string;

    /**
     * @return User
     */
    public function mergedBy(): User;

    /**
     * @return int
     */
    public function comments(): int;

    /**
     * @return int
     */
    public function reviewComments(): int;

    /**
     * @return bool
     */
    public function maintainerCanModify(): bool;

    /**
     * @return int
     */
    public function commits(): int;

    /**
     * @return int
     */
    public function additions(): int;

    /**
     * @return int
     */
    public function deletions(): int;

    /**
     * @return int
     */
    public function changedFiles(): int;
}
