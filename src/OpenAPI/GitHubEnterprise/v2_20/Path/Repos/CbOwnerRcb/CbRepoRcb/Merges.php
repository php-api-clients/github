<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\MergeOperation;

final class Merges
{
    function post($owner, $repo): MergeOperation
    {
        return new MergeOperation($owner, $repo);
    }
}
