<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     files="Repository\CommunityHealth\Files"
 * )
 * @EmptyResource("Repository\EmptyCommunityHealth")
 */
abstract class CommunityHealth extends AbstractResource implements CommunityHealthInterface
{
    protected int $health_percentage;

    protected Repository\CommunityHealth\Files $files;

    protected bool $protected;

    protected DateTimeInterface $updated_at;

    public function healthPercentage(): int
    {
        return $this->health_percentage;
    }

    public function files(): Repository\CommunityHealth\Files
    {
        return $this->files;
    }

    public function protected(): bool
    {
        return $this->protected;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }
}
