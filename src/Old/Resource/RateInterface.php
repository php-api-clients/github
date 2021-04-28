<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RateInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Rate';

    /**
     * @return int
     */
    public function limit(): int;

    /**
     * @return int
     */
    public function remaining(): int;

    /**
     * @return int
     */
    public function reset(): int;
}
