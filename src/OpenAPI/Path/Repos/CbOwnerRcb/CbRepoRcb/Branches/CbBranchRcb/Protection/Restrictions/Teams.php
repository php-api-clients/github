<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Teams
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTeamsWithAccessToProtectedBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetTeamsWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetTeamAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddTeamAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveTeamAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveTeamAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
