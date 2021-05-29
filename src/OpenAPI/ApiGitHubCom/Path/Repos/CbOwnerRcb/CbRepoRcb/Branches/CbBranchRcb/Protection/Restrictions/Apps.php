<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions;

final class Apps
{
    function get($owner, $repo, $branch): GetAppsWithAccessToProtectedBranch
    {
        return new GetAppsWithAccessToProtectedBranch($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetAppAccessRestrictions
    {
        return new SetAppAccessRestrictions($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddAppAccessRestrictions
    {
        return new AddAppAccessRestrictions($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveAppAccessRestrictions
    {
        return new RemoveAppAccessRestrictions($owner, $repo, $branch);
    }
}
