<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposStarredByAuthenticatedUser;

final class Starred
{
    function get(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1): ListReposStarredByAuthenticatedUser
    {
        return new ListReposStarredByAuthenticatedUser($sort, $direction, $per_page, $page);
    }
}
