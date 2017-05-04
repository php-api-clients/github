<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyRate implements RateInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function limit() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function remaining() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function reset() : int
    {
        return null;
    }
}
