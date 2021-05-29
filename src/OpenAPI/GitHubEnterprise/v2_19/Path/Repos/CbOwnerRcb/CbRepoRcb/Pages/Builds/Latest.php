<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetLatestPagesBuildOperation;

final class Latest
{
    function get($owner, $repo): GetLatestPagesBuildOperation
    {
        return new GetLatestPagesBuildOperation($owner, $repo);
    }
}
