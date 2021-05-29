<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues\ListCommentsForRepoOperation;

final class Comments
{
    function get($owner, $repo, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1): ListCommentsForRepoOperation
    {
        return new ListCommentsForRepoOperation($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
