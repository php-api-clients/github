<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchOperation;

final class CbBranchRcb
{
    function get($owner, $repo, $branch): GetBranchOperation
    {
        return new GetBranchOperation($owner, $repo, $branch);
    }
}
