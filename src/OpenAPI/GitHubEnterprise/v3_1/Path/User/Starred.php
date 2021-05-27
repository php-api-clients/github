<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\User;

final class Starred
{
    function get(string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposStarredByAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Activity\ListReposStarredByAuthenticatedUserOperation($sort, $direction, $per_page, $page);
    }
}
