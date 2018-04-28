<?php declare(strict_types=1);

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
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var User
     */
    protected $actor;

    /**
     * @var RepositorySimple
     */
    protected $repo;

    /**
     * @var array
     */
    protected $payload;

    /**
     * @var bool
     */
    protected $public;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @return int
     */
    public function id(): int
    {
        return (int)$this->id;
    }

    /**
     * @return string
     */
    public function type(): string
    {
        return $this->type;
    }

    /**
     * @return User
     */
    public function actor(): User
    {
        return $this->actor;
    }

    /**
     * @return RepositorySimple
     */
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

    /**
     * @return bool
     */
    public function public(): bool
    {
        return $this->public;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }
}
