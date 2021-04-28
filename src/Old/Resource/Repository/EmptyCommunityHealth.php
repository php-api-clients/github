<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyCommunityHealth implements CommunityHealthInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function healthPercentage(): int
    {
        return null;
    }

    /**
     * @return Repository\CommunityHealth\Files
     */
    public function files(): Repository\CommunityHealth\Files
    {
        return null;
    }

    /**
     * @return bool
     */
    public function protected(): bool
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return null;
    }
}
