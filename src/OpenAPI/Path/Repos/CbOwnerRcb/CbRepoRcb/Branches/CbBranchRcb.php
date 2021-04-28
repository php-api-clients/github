<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches;

final class CbBranchRcb
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetBranchOperation($owner, $repo, $branch);
    }
}
