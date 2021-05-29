<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\AddTeamAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetTeamsWithAccessToProtectedBranchOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\RemoveTeamAccessRestrictionsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\SetTeamAccessRestrictionsOperation;

final class Teams
{
    function get($owner, $repo, $branch): GetTeamsWithAccessToProtectedBranchOperation
    {
        return new GetTeamsWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }

    function put($owner, $repo, $branch): SetTeamAccessRestrictionsOperation
    {
        return new SetTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function post($owner, $repo, $branch): AddTeamAccessRestrictionsOperation
    {
        return new AddTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }

    function delete($owner, $repo, $branch): RemoveTeamAccessRestrictionsOperation
    {
        return new RemoveTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
