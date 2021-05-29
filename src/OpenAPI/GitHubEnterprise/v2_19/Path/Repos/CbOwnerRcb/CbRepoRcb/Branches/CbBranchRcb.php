<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetBranch;

final class CbBranchRcb
{
    function get($owner, $repo, $branch): GetBranch
    {
        return new GetBranch($owner, $repo, $branch);
    }
}
