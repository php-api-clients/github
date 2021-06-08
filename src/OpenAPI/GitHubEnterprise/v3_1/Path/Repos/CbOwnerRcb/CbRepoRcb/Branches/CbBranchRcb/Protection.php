<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteBranchProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranchProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateBranchProtection;

final class Protection
{
    function get($owner, $repo, $branch): GetBranchProtection
    {
        return new GetBranchProtection($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): UpdateBranchProtection
    {
        return new UpdateBranchProtection($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteBranchProtection
    {
        return new DeleteBranchProtection($owner, $repo, $branch);
    }
}
