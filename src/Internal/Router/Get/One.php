<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Root;
use InvalidArgumentException;

final class One
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\Root */
    public function call(string $call, array $params, array $pathChunks): Root|array
    {
        if ($pathChunks[0] === '') {
            if ($call === 'GET /') {
                return $this->routers->internal🔀Router🔀Get🔀Meta()->root($params);
            }
        }

        throw new InvalidArgumentException();
    }
}
