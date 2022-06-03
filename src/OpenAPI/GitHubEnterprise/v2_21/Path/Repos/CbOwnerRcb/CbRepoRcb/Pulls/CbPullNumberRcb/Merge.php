<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Merge
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\CheckIfMerged
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\CheckIfMerged($owner, $repo, $pull_number);
    }
    function put($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls\Merge($owner, $repo, $pull_number);
    }
}
