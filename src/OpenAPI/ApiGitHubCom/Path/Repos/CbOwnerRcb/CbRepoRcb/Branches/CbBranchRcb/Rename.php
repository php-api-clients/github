<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranchOperation;

final class Rename
{
    function post($owner, $repo, $branch): RenameBranchOperation
    {
        return new RenameBranchOperation($owner, $repo, $branch);
    }
}
