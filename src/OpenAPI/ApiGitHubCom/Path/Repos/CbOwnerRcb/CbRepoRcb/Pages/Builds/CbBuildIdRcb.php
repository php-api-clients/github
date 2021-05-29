<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages\Builds;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuildOperation;

final class CbBuildIdRcb
{
    function get($owner, $repo, $build_id): GetPagesBuildOperation
    {
        return new GetPagesBuildOperation($owner, $repo, $build_id);
    }
}
