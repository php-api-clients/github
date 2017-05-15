<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Rate as BaseRate;

class Rate extends BaseRate
{
    public function refresh(): Rate
    {
        throw new \Exception('TODO: create refresh method!');
    }
}
