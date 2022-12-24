<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Teams
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetTeamsWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetTeamsWithAccessToProtectedBranch($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\SetTeamAccessRestrictions($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\AddTeamAccessRestrictions($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\RemoveTeamAccessRestrictions($owner, $repo, $branch);
    }
}