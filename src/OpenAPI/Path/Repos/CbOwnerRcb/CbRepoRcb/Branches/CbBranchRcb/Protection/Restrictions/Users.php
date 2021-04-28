<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Users
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetUsersWithAccessToProtectedBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetUsersWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetUserAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetUserAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddUserAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddUserAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveUserAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveUserAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
