<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Stats;

final class CommitActivity
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitActivityStats
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetCommitActivityStats($owner, $repo);
    }
}
