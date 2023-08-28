<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Patch;

use ApiClients\Client\GitHub\Internal\Routers;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use InvalidArgumentException;

final class Nine
{
    public function __construct(private Routers $routers)
    {
    }

    /** @return Schema\TeamDiscussionComment */
    public function call(string $call, array $params, array $pathChunks): TeamDiscussionComment|array
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
                                            if ($call === 'PATCH /orgs/{org}/teams/{team_slug}/discussions/{discussion_number}/comments/{comment_number}') {
                                                return $this->routers->internal🔀Router🔀Patch🔀Teams()->updateDiscussionCommentInOrg($params);
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
