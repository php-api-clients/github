<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     creator="User"
 * )
 * @EmptyResource("Repository\Commit\EmptyStatus")
 */
abstract class Status extends AbstractResource implements StatusInterface
{
    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    protected string $state;

    protected string $target_url;

    protected string $description;

    protected int $id;

    protected string $url;

    protected string $context;

    protected User $creator;

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function targetUrl(): string
    {
        return $this->target_url;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function context(): string
    {
        return $this->context;
    }

    public function creator(): User
    {
        return $this->creator;
    }
}
