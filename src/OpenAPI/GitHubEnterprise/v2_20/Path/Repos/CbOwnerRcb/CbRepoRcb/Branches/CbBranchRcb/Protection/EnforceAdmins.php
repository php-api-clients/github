<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\DeleteAdminBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetAdminBranchProtectionOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\SetAdminBranchProtectionOperation;

final class EnforceAdmins
{
    function get($owner, $repo, $branch): GetAdminBranchProtectionOperation
    {
        return new GetAdminBranchProtectionOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): SetAdminBranchProtectionOperation
    {
        return new SetAdminBranchProtectionOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteAdminBranchProtectionOperation
    {
        return new DeleteAdminBranchProtectionOperation($owner, $repo, $branch);
    }
}
