<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface EventInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Event';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function type(): string;

    /**
     * @return User
     */
    public function actor(): User;

    /**
     * @return RepositorySimple
     */
    public function repo(): RepositorySimple;

    /**
     * @return array
     */
    public function payload(): array;

    /**
     * @return bool
     */
    public function public(): bool;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;
}
