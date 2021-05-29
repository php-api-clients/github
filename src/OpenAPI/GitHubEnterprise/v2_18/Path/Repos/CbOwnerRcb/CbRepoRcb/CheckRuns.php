<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks\CreateOperation;

final class CheckRuns
{
    function post($owner, $repo): CreateOperation
    {
        return new CreateOperation($owner, $repo);
    }
}
