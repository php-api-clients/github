<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface ReleaseInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Release';

    public function id(): int;

    public function tagName(): string;

    public function targetCommitish(): string;

    public function name(): string;

    public function body(): string;

    public function draft(): bool;

    public function prerelease(): bool;

    public function createdAt(): DateTimeInterface;

    public function updatedAt(): DateTimeInterface;

    public function author(): User;

    /**
     * @return array
     */
    public function assets(): array;
}
