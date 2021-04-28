<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

final class Rename
{
    function post($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\RenameBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\RenameBranchOperation($owner, $repo, $branch);
    }
}
