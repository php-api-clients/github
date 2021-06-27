<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     statuses="Repository\Commit\Status"
 * )
 * @Nested(
 *     repository="Repository"
 * )
 * @EmptyResource("Repository\Commit\EmptyCombinedStatus")
 */
abstract class CombinedStatus extends AbstractResource implements CombinedStatusInterface
{
    protected string $state;

    protected string $sha;

    protected string $url;

    protected int $total_count;

    protected Repository\Commit\Status $statuses;

    protected Repository $repository;

    public function state(): string
    {
        return $this->state;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function totalCount(): int
    {
        return $this->total_count;
    }

    public function statuses(): Repository\Commit\Status
    {
        return $this->statuses;
    }

    public function repository(): Repository
    {
        return $this->repository;
    }
}
