<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Search;

final class Users
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search\Users
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search\Users($q, $sort, $order, $per_page, $page);
    }
}
