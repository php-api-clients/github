<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Subscriptions
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity\ListWatchedReposForAuthenticatedUser($per_page, $page);
    }
}
