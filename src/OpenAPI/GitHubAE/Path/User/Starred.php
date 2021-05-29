<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUserOperation;

final class Starred
{
    function get(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1): ListReposStarredByAuthenticatedUserOperation
    {
        return new ListReposStarredByAuthenticatedUserOperation($sort, $direction, $per_page, $page);
    }
}
