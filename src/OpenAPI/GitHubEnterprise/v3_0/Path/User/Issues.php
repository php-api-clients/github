<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues\ListForAuthenticatedUserOperation;

final class Issues
{
    function get(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1): ListForAuthenticatedUserOperation
    {
        return new ListForAuthenticatedUserOperation($filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
