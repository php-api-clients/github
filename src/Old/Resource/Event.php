<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     actor="User",
 *     repo="RepositorySimple"
 * )
 * @EmptyResource("EmptyEvent")
 */
abstract class Event extends AbstractResource implements EventInterface
{
    protected int $id;

    protected string $type;

    protected User $actor;

    protected RepositorySimple $repo;

    /** @var array */
    protected array $payload;

    protected bool $public;

    protected DateTimeInterface $created_at;

    public function id(): int
    {
        return (int) $this->id;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function actor(): User
    {
        return $this->actor;
    }

    public function repo(): RepositorySimple
    {
        return $this->repo;
    }

    /**
     * @return array
     */
    public function payload(): array
    {
        return $this->payload;
    }

    public function public(): bool
    {
        return $this->public;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }
}
