<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Pulls;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls\GetOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Pulls\UpdateOperation;

final class CbPullNumberRcb
{
    function get($owner, $repo, $pull_number): GetOperation
    {
        return new GetOperation($owner, $repo, $pull_number);
    }

    function patch($owner, $repo, $pull_number): UpdateOperation
    {
        return new UpdateOperation($owner, $repo, $pull_number);
    }
}
