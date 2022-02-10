<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\RateLimit;

use ApiClients\Client\Github\Resource\RateLimit\Resources as BaseResources;
use Exception;

class Resources extends BaseResources
{
    public function refresh(): Resources
    {
        throw new Exception('TODO: create refresh method!');
    }
}
