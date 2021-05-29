<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     resources="RateLimit\Resources",
 *     rate="Rate"
 * )
 * @EmptyResource("EmptyRateLimit")
 */
abstract class RateLimit extends AbstractResource implements RateLimitInterface
{
    protected RateLimit\Resource $resources;

    protected Rate $rate;

    public function resources(): RateLimit\Resource
    {
        return $this->resources;
    }

    public function rate(): Rate
    {
        return $this->rate;
    }
}
