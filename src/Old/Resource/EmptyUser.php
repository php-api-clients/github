<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyUser implements UserInterface, EmptyResourceInterface
{
    public function id(): int
    {
        return null;
    }

    public function login(): string
    {
        return null;
    }

    public function url(): string
    {
        return null;
    }

    public function avatarUrl(): string
    {
        return null;
    }

    public function type(): string
    {
        return null;
    }

    public function siteAdmin(): bool
    {
        return null;
    }

    public function name(): string
    {
        return null;
    }

    public function company(): string
    {
        return null;
    }

    public function blog(): string
    {
        return null;
    }

    public function location(): string
    {
        return null;
    }

    public function email(): string
    {
        return null;
    }

    public function hireable(): bool
    {
        return null;
    }

    public function bio(): string
    {
        return null;
    }

    public function publicRepos(): string
    {
        return null;
    }

    public function publicGists(): string
    {
        return null;
    }

    public function followers(): string
    {
        return null;
    }

    public function following(): string
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

    public function repository(string $repository): void
    {
    }
}
