<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser;

final class Subscriptions
{
    function get($username, int $per_page = 30, int $page = 1): ListReposWatchedByUser
    {
        return new ListReposWatchedByUser($username, $per_page, $page);
    }
}
