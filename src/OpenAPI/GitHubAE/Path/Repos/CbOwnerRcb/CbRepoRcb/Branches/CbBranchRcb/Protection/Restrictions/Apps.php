<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Apps
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAppsWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAppsWithAccessToProtectedBranch($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetAppAccessRestrictions($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddAppAccessRestrictions($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveAppAccessRestrictions($owner, $repo, $branch);
    }
}
