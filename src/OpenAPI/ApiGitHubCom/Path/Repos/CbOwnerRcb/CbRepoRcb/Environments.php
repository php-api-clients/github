<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironmentsOperation;

final class Environments
{
    function get($owner, $repo): GetAllEnvironmentsOperation
    {
        return new GetAllEnvironmentsOperation($owner, $repo);
    }
}
