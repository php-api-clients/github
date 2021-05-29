<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\UsersOperation;

final class Users
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): UsersOperation
    {
        return new UsersOperation($q, $sort, $order, $per_page, $page);
    }
}
