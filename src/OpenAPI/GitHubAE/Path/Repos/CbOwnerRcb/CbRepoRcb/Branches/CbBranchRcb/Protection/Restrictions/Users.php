<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Users
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetUsersWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetUsersWithAccessToProtectedBranch($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetUserAccessRestrictions($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddUserAccessRestrictions($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveUserAccessRestrictions($owner, $repo, $branch);
    }
}
