<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Users
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetUsersWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetUsersWithAccessToProtectedBranch($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\SetUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\SetUserAccessRestrictions($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\AddUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\AddUserAccessRestrictions($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\RemoveUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\RemoveUserAccessRestrictions($owner, $repo, $branch);
    }
}
