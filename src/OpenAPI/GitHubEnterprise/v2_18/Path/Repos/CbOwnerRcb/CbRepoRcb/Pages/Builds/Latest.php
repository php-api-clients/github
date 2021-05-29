<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetLatestPagesBuild;

final class Latest
{
    function get($owner, $repo): GetLatestPagesBuild
    {
        return new GetLatestPagesBuild($owner, $repo);
    }
}
