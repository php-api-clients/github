<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Users\CbUsernameRcb;

final class Starred
{
    function get($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListReposStarredByUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Activity\ListReposStarredByUserOperation($username, $sort, $direction, $per_page, $page);
    }
}
