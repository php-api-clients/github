<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Pulls\UpdateBranch;

final class UpdateDashBranch
{
    function put($owner, $repo, $pull_number): UpdateBranch
    {
        return new UpdateBranch($owner, $repo, $pull_number);
    }
}
