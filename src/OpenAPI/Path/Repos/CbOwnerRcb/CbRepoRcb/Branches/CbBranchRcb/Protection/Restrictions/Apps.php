<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb\Protection\Restrictions;

final class Apps
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAppsWithAccessToProtectedBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetAppsWithAccessToProtectedBranchOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetAppAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\SetAppAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddAppAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\AddAppAccessRestrictionsOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveAppAccessRestrictionsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RemoveAppAccessRestrictionsOperation($owner, $repo, $branch);
    }
}
