<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Search\CodeOperation;

final class Code
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): CodeOperation
    {
        return new CodeOperation($q, $sort, $order, $per_page, $page);
    }
}
