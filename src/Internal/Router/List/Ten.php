<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\List;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use InvalidArgumentException;

final class Ten
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Observable<Schema\Reaction> */
    public function call(string $call, array $params, array $pathChunks): iterable
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
                                                if ($call === 'LIST /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}/reactions') {
                                                    return $this->routers->internal🔀Router🔀List🔀Reactions()->listForTeamDiscussionCommentInOrgListing($params);
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
