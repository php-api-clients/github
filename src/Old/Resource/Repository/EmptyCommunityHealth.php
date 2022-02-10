<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyCommunityHealth implements CommunityHealthInterface, EmptyResourceInterface
{
    public function healthPercentage(): int
    {
        return null;
    }

    public function files(): Repository\CommunityHealth\Files
    {
        return null;
    }

    public function protected(): bool
    {
        return null;
    }

    public function updatedAt(): DateTimeInterface
    {
        return null;
    }
}
