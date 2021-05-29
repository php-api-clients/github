<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateBranchProtectionOperation;

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
