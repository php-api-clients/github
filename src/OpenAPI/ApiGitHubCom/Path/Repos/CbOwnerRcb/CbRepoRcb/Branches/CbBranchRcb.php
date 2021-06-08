<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch;

final class CbBranchRcb
{
    function get($owner, $repo, $branch): GetBranch
    {
        return new GetBranch($owner, $repo, $branch);
    }
}
