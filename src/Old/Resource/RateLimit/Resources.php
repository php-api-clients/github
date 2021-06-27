<?php

declare(strict_types=1);

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
    protected Rate $core;

    protected Rate $search;

    public function core(): Rate
    {
        return $this->core;
    }

    public function search(): Rate
    {
        return $this->search;
    }
}
