<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees;

final class CbTreeShaRcb
{
    function get($owner, $repo, $tree_sha, $recursive) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetTreeOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Git\GetTreeOperation($owner, $repo, $tree_sha, $recursive);
    }
}
