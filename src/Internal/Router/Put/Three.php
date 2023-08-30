<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Put;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use InvalidArgumentException;

final class Three
{
    public function __construct(private Routers $routers)
    {
    }

    public function call(string $call, array $params, array $pathChunks): InteractionLimitResponse|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'interaction-limits') {
                    if ($call === 'PUT /user/interaction-limits') {
                        return $this->routers->internal🔀Router🔀Put🔀Interactions()->setRestrictionsForAuthenticatedUser($params);
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
