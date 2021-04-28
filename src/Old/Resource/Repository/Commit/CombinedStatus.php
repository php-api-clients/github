<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var int
     */
    protected $total_count;

    /**
     * @var Repository\Commit\Status
     */
    protected $statuses;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * @return string
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function totalCount(): int
    {
        return $this->total_count;
    }

    /**
     * @return Repository\Commit\Status
     */
    public function statuses(): Repository\Commit\Status
    {
        return $this->statuses;
    }

    /**
     * @return Repository
     */
    public function repository(): Repository
    {
        return $this->repository;
    }
}
