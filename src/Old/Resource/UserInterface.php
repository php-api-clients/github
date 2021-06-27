<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface UserInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'User';

    public function id(): int;

    public function login(): string;

    public function url(): string;

    public function avatarUrl(): string;

    public function type(): string;

    public function siteAdmin(): bool;

    public function name(): string;

    public function company(): string;

    public function blog(): string;

    public function location(): string;

    public function email(): string;

    public function hireable(): bool;

    public function bio(): string;

    public function publicRepos(): string;

    public function publicGists(): string;

    public function followers(): string;

    public function following(): string;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    public function repository(string $repository): void;
}
