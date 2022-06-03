<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Branches;

final class CbBranchRcb
{
    function get($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetBranch($owner, $repo, $branch);
    }
}
