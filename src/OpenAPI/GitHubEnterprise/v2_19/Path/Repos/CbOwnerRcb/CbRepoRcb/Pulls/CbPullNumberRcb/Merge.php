<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Pulls\CheckIfMergedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Pulls\MergeOperation;

final class Merge
{
    function get($owner, $repo, $pull_number): CheckIfMergedOperation
    {
        return new CheckIfMergedOperation($owner, $repo, $pull_number);
    }

    function put($owner, $repo, $pull_number): MergeOperation
    {
        return new MergeOperation($owner, $repo, $pull_number);
    }
}
