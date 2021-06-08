<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Git;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git\CreateTree;

final class Trees
{
    function post($owner, $repo): CreateTree
    {
        return new CreateTree($owner, $repo);
    }
}
