<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\DeleteAdminBranchProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetAdminBranchProtection;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\SetAdminBranchProtection;

final class EnforceAdmins
{
    function get($owner, $repo, $branch): GetAdminBranchProtection
    {
        return new GetAdminBranchProtection($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): SetAdminBranchProtection
    {
        return new SetAdminBranchProtection($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): DeleteAdminBranchProtection
    {
        return new DeleteAdminBranchProtection($owner, $repo, $branch);
    }
}
