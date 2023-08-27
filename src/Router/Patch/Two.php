<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PrivateUser;
use InvalidArgumentException;

final class Two
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\PrivateUser|array{code:int} */
    public function call(string $call, array $params, array $pathChunks): PrivateUser|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'user') {
                if ($call === 'PATCH /user') {
                    return $this->routers->router🔀Patch🔀Users()->updateAuthenticated($params);
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
