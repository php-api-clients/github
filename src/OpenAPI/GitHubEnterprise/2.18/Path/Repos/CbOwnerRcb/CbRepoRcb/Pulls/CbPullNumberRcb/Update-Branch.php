<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Update-Branch
{
    function put($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Pulls\UpdateBranchOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\Pulls\UpdateBranchOperation($owner, $repo, $pull_number);
    }
}
