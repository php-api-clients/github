<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestReleaseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestReleaseOperation($owner, $repo);
    }
}
