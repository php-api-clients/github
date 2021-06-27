<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface EventInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Event';

    public function id(): int;

    public function type(): string;

    public function actor(): User;

    public function repo(): RepositorySimple;

    /**
     * @return array
     */
    public function payload(): array;

    public function public(): bool;

    public function createdAt(): DateTimeInterface;
}
