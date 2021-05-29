<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetLatestRelease;

final class Latest
{
    function get($owner, $repo): GetLatestRelease
    {
        return new GetLatestRelease($owner, $repo);
    }
}
