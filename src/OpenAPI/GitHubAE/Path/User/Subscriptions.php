<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Subscriptions
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchedReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListWatchedReposForAuthenticatedUser($per_page, $page);
    }
}
