<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Collection(
 *     assets="Repository\Release\Asset"
 * )
 * @Nested(
 *     author="User"
 * )
 * @EmptyResource("Repository\EmptyRelease")
 */
abstract class Release extends AbstractResource implements ReleaseInterface
{
    protected int $id;

    protected string $tag_name;

    protected string $target_commitish;

    protected string $name;

    protected string $body;

    protected bool $draft;

    protected bool $prerelease;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    protected User $author;

    protected Repository\Release\Asset $assets;

    public function id(): int
    {
        return $this->id;
    }

    public function tagName(): string
    {
        return $this->tag_name;
    }

    public function targetCommitish(): string
    {
        return $this->target_commitish;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function body(): string
    {
        return $this->body;
    }

    public function draft(): bool
    {
        return $this->draft;
    }

    public function prerelease(): bool
    {
        return $this->prerelease;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    public function author(): User
    {
        return $this->author;
    }

    /**
     * @return array
     */
    public function assets(): array
    {
        return $this->assets;
    }
}
