<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments;

final class Environments
{
    function get($owner, $repo): GetAllEnvironments
    {
        return new GetAllEnvironments($owner, $repo);
    }
}
