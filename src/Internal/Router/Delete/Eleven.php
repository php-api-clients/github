<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Delete;

use ApiClients\Client\GitHub\Internal\Routers;
use InvalidArgumentException;

final class Eleven
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return array{code:int} */
    public function call(string $call, array $params, array $pathChunks): array
    {
        if ($pathChunks[0] === '') {
            if ($pathChunks[1] === 'orgs') {
                if ($pathChunks[2] === '{org}') {
                    if ($pathChunks[3] === 'teams') {
                        if ($pathChunks[4] === '{team_slug}') {
                            if ($pathChunks[5] === 'discussions') {
                                if ($pathChunks[6] === '{discussion_number}') {
                                    if ($pathChunks[7] === 'comments') {
                                        if ($pathChunks[8] === '{comment_number}') {
                                            if ($pathChunks[9] === 'reactions') {
                                                if ($pathChunks[10] === '{reaction_id}') {
                                                    if ($call === 'DELETE /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions/{reaction_id}') {
                                                        return $this->routers->internal🔀Router🔀Delete🔀Reactions()->deleteForTeamDiscussionComment($params);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        throw new InvalidArgumentException();
    }
}
