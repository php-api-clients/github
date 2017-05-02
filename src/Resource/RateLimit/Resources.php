<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\RateLimit;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     core="Rate",
 *     search="Rate"
 * )
 * @EmptyResource("RateLimit\EmptyResources")
 */
abstract class Resources extends AbstractResource implements ResourcesInterface
{
    /**
     * @var Rate
     */
    protected $core;

    /**
     * @var Rate
     */
    protected $search;

    /**
     * @return Rate
     */
    public function core() : Rate
    {
        return $this->core;
    }

    /**
     * @return Rate
     */
    public function search() : Rate
    {
        return $this->search;
    }
}
