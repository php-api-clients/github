<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\Merge;

final class Merges
{
    function post($owner, $repo): Merge
    {
        return new Merge($owner, $repo);
    }
}
