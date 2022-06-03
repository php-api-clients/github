<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Users\CbUsernameRcb;

final class Starred
{
    function get($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListReposStarredByUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Activity\ListReposStarredByUser($username, $sort, $direction, $per_page, $page);
    }
}
