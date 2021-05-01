<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\User;

final class Subscriptions
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Activity\ListWatchedReposForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Activity\ListWatchedReposForAuthenticatedUserOperation($per_page, $page);
    }
}
