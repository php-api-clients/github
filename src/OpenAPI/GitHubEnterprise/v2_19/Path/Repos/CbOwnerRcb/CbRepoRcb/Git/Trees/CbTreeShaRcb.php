<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\GetTree;

final class CbTreeShaRcb
{
    function get($owner, $repo, $tree_sha, $recursive): GetTree
    {
        return new GetTree($owner, $repo, $tree_sha, $recursive);
    }
}
