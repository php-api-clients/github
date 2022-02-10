<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyRate")
 */
abstract class Rate extends AbstractResource implements RateInterface
{
    protected int $limit;

    protected int $remaining;

    protected int $reset;

    public function limit(): int
    {
        return $this->limit;
    }

    public function remaining(): int
    {
        return $this->remaining;
    }

    public function reset(): int
    {
        return $this->reset;
    }
}
