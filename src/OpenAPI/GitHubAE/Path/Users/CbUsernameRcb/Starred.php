<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

final class Starred
{
    function get($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByUserOperation($username, $sort, $direction, $per_page, $page);
    }
}
