<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetLatestRelease;

final class Latest
{
    function get($owner, $repo): GetLatestRelease
    {
        return new GetLatestRelease($owner, $repo);
    }
}
