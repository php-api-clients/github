<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitCommentsForRepoOperation;

final class Comments
{
    function get($owner, $repo, int $per_page = 30, int $page = 1): ListCommitCommentsForRepoOperation
    {
        return new ListCommitCommentsForRepoOperation($owner, $repo, $per_page, $page);
    }
}
