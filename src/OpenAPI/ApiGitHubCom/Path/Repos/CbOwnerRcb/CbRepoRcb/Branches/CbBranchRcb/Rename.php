<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches\CbBranchRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch;

final class Rename
{
    function post($owner, $repo, $branch): RenameBranch
    {
        return new RenameBranch($owner, $repo, $branch);
    }
}
