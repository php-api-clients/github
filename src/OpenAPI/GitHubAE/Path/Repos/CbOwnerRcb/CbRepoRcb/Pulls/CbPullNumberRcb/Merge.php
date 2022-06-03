<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

final class Merge
{
    function get($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CheckIfMerged
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\CheckIfMerged($owner, $repo, $pull_number);
    }
    function put($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls\Merge($owner, $repo, $pull_number);
    }
}
