<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees;

final class CbTreeShaRcb
{
    function get($owner, $repo, $tree_sha, $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\GetTree
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Git\GetTree($owner, $repo, $tree_sha, $recursive);
    }
}
