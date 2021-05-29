<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Pulls\UpdateBranchOperation;

final class UpdateDashBranch
{
    function put($owner, $repo, $pull_number): UpdateBranchOperation
    {
        return new UpdateBranchOperation($owner, $repo, $pull_number);
    }
}
