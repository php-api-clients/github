<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\License as BaseLicense;
use Exception;

class License extends BaseLicense
{
    public function refresh(): License
    {
        throw new Exception('TODO: create refresh method!');
    }
}
