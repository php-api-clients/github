<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListWatchedReposForAuthenticatedUser;

final class Subscriptions
{
    function get(int $per_page = 30, int $page = 1): ListWatchedReposForAuthenticatedUser
    {
        return new ListWatchedReposForAuthenticatedUser($per_page, $page);
    }
}
