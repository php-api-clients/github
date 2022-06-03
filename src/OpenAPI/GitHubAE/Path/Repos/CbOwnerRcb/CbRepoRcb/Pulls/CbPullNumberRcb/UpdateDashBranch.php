<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class UpdateDashBranch
{
    function put($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\UpdateBranch($owner, $repo, $pull_number);
    }
}
