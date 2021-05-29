<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Search;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Search\IssuesAndPullRequestsOperation;

final class Issues
{
    function get($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1): IssuesAndPullRequestsOperation
    {
        return new IssuesAndPullRequestsOperation($q, $sort, $order, $per_page, $page);
    }
}
