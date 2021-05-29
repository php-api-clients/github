<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\AddUserAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetUsersWithAccessToProtectedBranchOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\RemoveUserAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\SetUserAccessRestrictionsOperation;

final class Users
{
    function get($owner, $repo, $branch): GetUsersWithAccessToProtectedBranchOperation
    {
        return new GetUsersWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetUserAccessRestrictionsOperation
    {
        return new SetUserAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddUserAccessRestrictionsOperation
    {
        return new AddUserAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveUserAccessRestrictionsOperation
    {
        return new RemoveUserAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
