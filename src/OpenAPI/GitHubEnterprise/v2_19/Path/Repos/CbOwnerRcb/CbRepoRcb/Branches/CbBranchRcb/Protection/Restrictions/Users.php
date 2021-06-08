<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddUserAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetUsersWithAccessToProtectedBranch;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveUserAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetUserAccessRestrictions;

final class Users
{
    function get($owner, $repo, $branch): GetUsersWithAccessToProtectedBranch
    {
        return new GetUsersWithAccessToProtectedBranch($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetUserAccessRestrictions
    {
        return new SetUserAccessRestrictions($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddUserAccessRestrictions
    {
        return new AddUserAccessRestrictions($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveUserAccessRestrictions
    {
        return new RemoveUserAccessRestrictions($owner, $repo, $branch);
    }
}
