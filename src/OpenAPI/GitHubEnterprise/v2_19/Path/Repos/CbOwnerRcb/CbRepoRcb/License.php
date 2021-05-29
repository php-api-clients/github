<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Licenses\GetForRepoOperation;

final class License
{
    function get($owner, $repo): GetForRepoOperation
    {
        return new GetForRepoOperation($owner, $repo);
    }
}
