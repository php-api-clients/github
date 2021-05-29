<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\AddTeamAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetTeamsWithAccessToProtectedBranch;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\RemoveTeamAccessRestrictions;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\SetTeamAccessRestrictions;

final class Teams
{
    function get($owner, $repo, $branch): GetTeamsWithAccessToProtectedBranch
    {
        return new GetTeamsWithAccessToProtectedBranch($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetTeamAccessRestrictions
    {
        return new SetTeamAccessRestrictions($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddTeamAccessRestrictions
    {
        return new AddTeamAccessRestrictions($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveTeamAccessRestrictions
    {
        return new RemoveTeamAccessRestrictions($owner, $repo, $branch);
    }
}
