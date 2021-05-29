<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks\CreateOperation;

final class CheckRuns
{
    function post($owner, $repo): CreateOperation
    {
        return new CreateOperation($owner, $repo);
    }
}
