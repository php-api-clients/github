<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Starred
{
    function get(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity\ListReposStarredByAuthenticatedUserOperation($sort, $direction, $per_page, $page);
    }
}
