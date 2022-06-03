<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Merges
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Merge($owner, $repo);
    }
}
