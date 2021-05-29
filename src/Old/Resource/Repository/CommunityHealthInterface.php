<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface CommunityHealthInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\CommunityHealth';

    public function healthPercentage(): int;

    public function files(): Repository\CommunityHealth\Files;

    public function protected(): bool;

    public function updatedAt(): DateTimeInterface;
}
