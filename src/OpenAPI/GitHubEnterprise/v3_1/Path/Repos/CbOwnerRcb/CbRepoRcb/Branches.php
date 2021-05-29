<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranchesOperation;

final class Branches
{
    function get($owner, $repo, $protected, int $per_page = 30, int $page = 1): ListBranchesOperation
    {
        return new ListBranchesOperation($owner, $repo, $protected, $per_page, $page);
    }
}
