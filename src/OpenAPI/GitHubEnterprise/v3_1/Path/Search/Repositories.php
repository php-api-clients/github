<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Search;

final class Repositories
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\ReposOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\ReposOperation($q, $sort, $order, $per_page, $page);
    }
}
