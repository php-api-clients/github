<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

final class Latest
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestPagesBuild($owner, $repo);
    }
}
