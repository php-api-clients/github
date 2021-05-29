<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListBranches;

final class Branches
{
    function get($owner, $repo, $protected, int $per_page = 30, int $page = 1): ListBranches
    {
        return new ListBranches($owner, $repo, $protected, $per_page, $page);
    }
}
