<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity\ListReposStarredByUserOperation;

final class Starred
{
    function get($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1): ListReposStarredByUserOperation
    {
        return new ListReposStarredByUserOperation($username, $sort, $direction, $per_page, $page);
    }
}
