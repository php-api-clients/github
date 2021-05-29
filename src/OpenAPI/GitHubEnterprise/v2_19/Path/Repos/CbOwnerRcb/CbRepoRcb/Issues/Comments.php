<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues\ListCommentsForRepo;

final class Comments
{
    function get($owner, $repo, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1): ListCommentsForRepo
    {
        return new ListCommentsForRepo($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
}
