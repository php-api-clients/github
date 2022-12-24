<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees;

final class CbTreeShaRcb
{
    function get($owner, $repo, $tree_sha, $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\GetTree($owner, $repo, $tree_sha, $recursive);
    }
}