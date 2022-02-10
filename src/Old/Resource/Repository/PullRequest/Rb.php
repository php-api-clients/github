<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     user="User",
 *     repo="Repository"
 * )
 * @EmptyResource("Repository\PullRequest\EmptyRb")
 */
abstract class Rb extends AbstractResource implements RbInterface
{
    protected string $label;

    protected string $ref;

    protected string $sha;

    protected User $user;

    protected Repository $repo;

    public function label(): string
    {
        return $this->label;
    }

    public function ref(): string
    {
        return $this->ref;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function user(): User
    {
        return $this->user;
    }

    public function repo(): Repository
    {
        return $this->repo;
    }
}
