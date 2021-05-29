<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListWatchedReposForAuthenticatedUserOperation;

final class Subscriptions
{
    function get(int $per_page = 30, int $page = 1): ListWatchedReposForAuthenticatedUserOperation
    {
        return new ListWatchedReposForAuthenticatedUserOperation($per_page, $page);
    }
}
