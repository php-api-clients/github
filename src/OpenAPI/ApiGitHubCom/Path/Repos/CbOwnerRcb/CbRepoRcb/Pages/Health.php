<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Pages;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck;

final class Health
{
    function get($owner, $repo): GetPagesHealthCheck
    {
        return new GetPagesHealthCheck($owner, $repo);
    }
}
