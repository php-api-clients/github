<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface ReleaseInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Release';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function tagName(): string;

    /**
     * @return string
     */
    public function targetCommitish(): string;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function body(): string;

    /**
     * @return bool
     */
    public function draft(): bool;

    /**
     * @return bool
     */
    public function prerelease(): bool;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface;

    /**
     * @return User
     */
    public function author(): User;

    /**
     * @return array
     */
    public function assets(): array;
}
