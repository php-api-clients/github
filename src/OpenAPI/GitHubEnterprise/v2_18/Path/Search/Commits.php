<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Search\CommitsOperation;

final class Commits
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): CommitsOperation
    {
        return new CommitsOperation($q, $sort, $order, $per_page, $page);
    }
}
