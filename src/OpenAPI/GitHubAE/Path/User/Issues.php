<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User;

final class Issues
{
    function get(string $filter = 'assigned', string $state = 'open', $labels, string $sort = 'created', string $direction = 'desc', $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Issues\ListForAuthenticatedUserOperation($filter, $state, $labels, $sort, $direction, $since, $per_page, $page);
    }
}
