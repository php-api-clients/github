<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\AddAppAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetAppsWithAccessToProtectedBranchOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\RemoveAppAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\SetAppAccessRestrictionsOperation;

final class Apps
{
    function get($owner, $repo, $branch): GetAppsWithAccessToProtectedBranchOperation
    {
        return new GetAppsWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetAppAccessRestrictionsOperation
    {
        return new SetAppAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddAppAccessRestrictionsOperation
    {
        return new AddAppAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveAppAccessRestrictionsOperation
    {
        return new RemoveAppAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
