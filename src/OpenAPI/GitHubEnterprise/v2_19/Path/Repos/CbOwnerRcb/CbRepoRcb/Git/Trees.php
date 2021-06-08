<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git\CreateTree;

final class Trees
{
    function post($owner, $repo): CreateTree
    {
        return new CreateTree($owner, $repo);
    }
}
