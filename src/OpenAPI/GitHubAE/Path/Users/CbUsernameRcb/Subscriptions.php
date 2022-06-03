<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Subscriptions
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposWatchedByUser($username, $per_page, $page);
    }
}
