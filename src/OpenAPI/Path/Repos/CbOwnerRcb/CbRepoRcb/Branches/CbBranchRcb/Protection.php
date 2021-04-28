<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

final class Protection
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetBranchProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetBranchProtectionOperation($owner, $repo, $branch);
    }
    function put($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateBranchProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\UpdateBranchProtectionOperation($owner, $repo, $branch);
    }
    function delete($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteBranchProtectionOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\DeleteBranchProtectionOperation($owner, $repo, $branch);
    }
}
