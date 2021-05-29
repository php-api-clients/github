<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\DeleteBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\GetBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\UpdateBranchProtectionOperation;

final class Protection
{
    function get($owner, $repo, $branch): GetBranchProtectionOperation
    {
        return new GetBranchProtectionOperation($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): UpdateBranchProtectionOperation
    {
        return new UpdateBranchProtectionOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteBranchProtectionOperation
    {
        return new DeleteBranchProtectionOperation($owner, $repo, $branch);
    }
}
