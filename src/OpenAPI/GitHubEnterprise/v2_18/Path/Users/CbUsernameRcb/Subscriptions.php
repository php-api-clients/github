<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity\ListReposWatchedByUserOperation;

final class Subscriptions
{
    function get($username, int $per_page = 30, int $page = 1): ListReposWatchedByUserOperation
    {
        return new ListReposWatchedByUserOperation($username, $per_page, $page);
    }
}
