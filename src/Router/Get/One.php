<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Routers;
use ApiClients\Client\GitHub\Schema\Root;
use InvalidArgumentException;

final class One
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): Root|array
    {
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                return $this->routers->router🔀Get🔀Meta()->root($params);
            }
        }

        throw new InvalidArgumentException();
    }
}
