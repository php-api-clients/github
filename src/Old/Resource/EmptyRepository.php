<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyRepository implements RepositoryInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function fullName(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function description(): string
    {
        return null;
    }

    public function private(): bool
    {
        return null;
    }

    public function fork(): bool
    {
        return null;
    }

    public function homepage(): string
    {
        return null;
    }

    public function language(): string
    {
        return null;
    }

    public function forksCount(): int
    {
        return null;
    }

    public function stargazersCount(): int
    {
        return null;
    }

    public function watchersCount(): int
    {
        return null;
    }

    public function size(): int
    {
        return null;
    }

    public function defaultBranch(): string
    {
        return null;
    }

    public function openIssuesCount(): int
    {
        return null;
    }

    public function hasIssues(): bool
    {
        return null;
    }

    public function hasWiki(): bool
    {
        return null;
    }

    public function hasPages(): bool
    {
        return null;
    }

    public function hasDownloads(): bool
    {
        return null;
    }

    public function pushedAt(): DateTimeInterface
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

    /**
     * @return array
     */
    public function permissions(): array
    {
    }

    public function htmlUrl(): string
    {
        return null;
    }

    public function owner(): User
    {
        return null;
    }

    public function license(): License
    {
        return null;
    }

    /**
     * @return array
     */
    public function topics(): array
    {
    }
}
