<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheckOperation;

final class Health
{
    function get($owner, $repo): GetPagesHealthCheckOperation
    {
        return new GetPagesHealthCheckOperation($owner, $repo);
    }
}
