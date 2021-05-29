<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Async\Git\Ref;

use ApiClients\Client\Github\Resource\Git\Ref\Object_ as BaseObject_;
use Exception;

class Object_ extends BaseObject_
{
    public function refresh(): Object_
    {
        throw new Exception('TODO: create refresh method!');
    }
}
