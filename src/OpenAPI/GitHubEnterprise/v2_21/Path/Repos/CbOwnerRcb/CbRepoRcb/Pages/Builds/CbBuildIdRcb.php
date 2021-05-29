<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetPagesBuild;

final class CbBuildIdRcb
{
    function get($owner, $repo, $build_id): GetPagesBuild
    {
        return new GetPagesBuild($owner, $repo, $build_id);
    }
}
