<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Put;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\InteractionLimitResponse;
use InvalidArgumentException;

final class Four
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int}|Schema\InteractionLimitResponse */
    public function call(string $call, array $params, array $pathChunks): InteractionLimitResponse|array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'gists') {
                if ($pathChunks[2] === '{gist_id}') {
                    if ($pathChunks[3] === 'star') {
                        if ($call === 'PUT /gists/{gist_id}/star') {
                            return $this->routers->internal🔀Router🔀Put🔀Gists()->star($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'interaction-limits') {
                        if ($call === 'PUT /orgs/{org}/interaction-limits') {
                            return $this->routers->internal🔀Router🔀Put🔀Interactions()->setRestrictionsForOrg($params);
                        }
                    }
                }
            } elseif ($pathChunks[1] === 'user') {
                if ($pathChunks[2] === 'blocks') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/blocks/{username}') {
                            return $this->routers->internal🔀Router🔀Put🔀Users()->block($params);
                        }
                    }
                } elseif ($pathChunks[2] === 'following') {
                    if ($pathChunks[3] === '{username}') {
                        if ($call === 'PUT /user/following/{username}') {
                            return $this->routers->internal🔀Router🔀Put🔀Users()->follow($params);
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
