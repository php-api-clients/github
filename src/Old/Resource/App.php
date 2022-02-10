<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     owner="User"
 * )
 * @EmptyResource("EmptyApp")
 */
abstract class App extends AbstractResource implements AppInterface
{
    protected int $id;

    protected string $slug;

    protected User $owner;

    protected string $name;

    protected string $description;

    protected string $external_url;

    protected string $html_url;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    /** @var array */
    protected array $permissions;

    /** @var array */
    protected array $events;

    protected int $installations_count;

    public function id(): int
    {
        return $this->id;
    }

    public function slug(): string
    {
        return $this->slug;
    }

    public function owner(): User
    {
        return $this->owner;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function externalUrl(): string
    {
        return $this->external_url;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return array
     */
    public function permissions(): array
    {
        return $this->permissions;
    }

    /**
     * @return array
     */
    public function events(): array
    {
        return $this->events;
    }

    public function installationsCount(): int
    {
        return $this->installations_count;
    }
}
