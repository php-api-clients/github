<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Activity\ListReposStarredByUser;

final class Starred
{
    function get($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1): ListReposStarredByUser
    {
        return new ListReposStarredByUser($username, $sort, $direction, $per_page, $page);
    }
}
