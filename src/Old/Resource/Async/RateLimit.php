<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\RateLimit as BaseRateLimit;

class RateLimit extends BaseRateLimit
{
    public function refresh(): RateLimit
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
