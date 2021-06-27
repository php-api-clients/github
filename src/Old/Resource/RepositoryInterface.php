<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface RepositoryInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository';

    public function id(): int;

    public function name(): string;

    public function fullName(): string;

    public function url(): string;

    public function description(): string;

    public function private(): bool;

    public function fork(): bool;

    public function homepage(): string;

    public function language(): string;

    public function forksCount(): int;

    public function stargazersCount(): int;

    public function watchersCount(): int;

    public function size(): int;

    public function defaultBranch(): string;

    public function openIssuesCount(): int;

    public function hasIssues(): bool;

    public function hasWiki(): bool;

    public function hasPages(): bool;

    public function hasDownloads(): bool;

    public function pushedAt(): DateTimeInterface;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    /**
     * @return array
     */
    public function permissions(): array;

    public function htmlUrl(): string;

    public function owner(): User;

    public function license(): License;

    /**
     * @return array
     */
    public function topics(): array;
}
