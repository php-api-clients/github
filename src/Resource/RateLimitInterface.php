<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface RateLimitInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'RateLimit';

    /**
     * @return RateLimit\Resource
     */
    public function resources() : RateLimit\Resource;

    /**
     * @return Rate
     */
    public function rate() : Rate;
}
