<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateOperation;

final class CheckRuns
{
    function post($owner, $repo): CreateOperation
    {
        return new CreateOperation($owner, $repo);
    }
}
