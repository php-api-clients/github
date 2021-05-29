<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Releases;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetLatestReleaseOperation;

final class Latest
{
    function get($owner, $repo): GetLatestReleaseOperation
    {
        return new GetLatestReleaseOperation($owner, $repo);
    }
}
