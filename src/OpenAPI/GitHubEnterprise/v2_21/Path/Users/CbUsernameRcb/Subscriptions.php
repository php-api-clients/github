<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity\ListReposWatchedByUser;

final class Subscriptions
{
    function get($username, int $per_page = 30, int $page = 1): ListReposWatchedByUser
    {
        return new ListReposWatchedByUser($username, $per_page, $page);
    }
}
