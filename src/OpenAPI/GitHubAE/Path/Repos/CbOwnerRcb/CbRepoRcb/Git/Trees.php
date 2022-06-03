<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

final class Trees
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree($owner, $repo);
    }
}
