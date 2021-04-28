<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyRate")
 */
abstract class Rate extends AbstractResource implements RateInterface
{
    /**
     * @var int
     */
    protected $limit;

    /**
     * @var int
     */
    protected $remaining;

    /**
     * @var int
     */
    protected $reset;

    /**
     * @return int
     */
    public function limit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function remaining(): int
    {
        return $this->remaining;
    }

    /**
     * @return int
     */
    public function reset(): int
    {
        return $this->reset;
    }
}
