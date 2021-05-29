<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\CheckIfMerged;

final class Merge
{
    function get($owner, $repo, $pull_number): CheckIfMerged
    {
        return new CheckIfMerged($owner, $repo, $pull_number);
    }

    function put($owner, $repo, $pull_number): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls\Merge($owner, $repo, $pull_number);
    }
}
