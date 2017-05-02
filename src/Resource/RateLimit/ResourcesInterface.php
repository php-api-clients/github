<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\RateLimit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface ResourcesInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'RateLimit\\Resources';

    /**
     * @return Rate
     */
    public function core() : Rate;

    /**
     * @return Rate
     */
    public function search() : Rate;
}
