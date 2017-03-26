<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
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
    /**
     * @var int
     */
    protected $health_percentage;

    /**
     * @var Repository\CommunityHealth\Files
     */
    protected $files;

    /**
     * @var bool
     */
    protected $protected;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @return int
     */
    public function healthPercentage() : int
    {
        return $this->health_percentage;
    }

    /**
     * @return Repository\CommunityHealth\Files
     */
    public function files() : Repository\CommunityHealth\Files
    {
        return $this->files;
    }

    /**
     * @return bool
     */
    public function protected() : bool
    {
        return $this->protected;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface
    {
        return $this->updated_at;
    }
}
