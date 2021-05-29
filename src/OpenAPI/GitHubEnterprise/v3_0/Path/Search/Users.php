<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search\UsersOperation;

final class Users
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): UsersOperation
    {
        return new UsersOperation($q, $sort, $order, $per_page, $page);
    }
}
