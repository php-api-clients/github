<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     resources="RateLimit\Resource",
 *     rate="Rate"
 * )
 * @EmptyResource("EmptyRateLimit")
 */
abstract class RateLimit extends AbstractResource implements RateLimitInterface
{
    /**
     * @var RateLimit\Resource
     */
    protected $resources;

    /**
     * @var Rate
     */
    protected $rate;

    /**
     * @return RateLimit\Resource
     */
    public function resources() : RateLimit\Resource
    {
        return $this->resources;
    }

    /**
     * @return Rate
     */
    public function rate() : Rate
    {
        return $this->rate;
    }
}
