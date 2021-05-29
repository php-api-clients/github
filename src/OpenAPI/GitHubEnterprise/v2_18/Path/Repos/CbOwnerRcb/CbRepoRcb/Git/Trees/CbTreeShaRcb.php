<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Trees;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Git\GetTreeOperation;

final class CbTreeShaRcb
{
    function get($owner, $repo, $tree_sha, $recursive): GetTreeOperation
    {
        return new GetTreeOperation($owner, $repo, $tree_sha, $recursive);
    }
}
