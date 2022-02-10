<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async;

use ApiClients\Client\Github\Resource\Url as BaseUrl;
use Exception;

class Url extends BaseUrl
{
    public function refresh(): Url
    {
        throw new Exception('TODO: create refresh method!');
    }
}
