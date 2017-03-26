<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface CommunityHealthInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\CommunityHealth';

    /**
     * @return int
     */
    public function healthPercentage() : int;

    /**
     * @return Repository\CommunityHealth\Files
     */
    public function files() : Repository\CommunityHealth\Files;

    /**
     * @return bool
     */
    public function protected() : bool;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface;
}
