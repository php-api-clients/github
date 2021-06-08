<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\CreateSuite;

final class CheckSuites
{
    function post($owner, $repo): CreateSuite
    {
        return new CreateSuite($owner, $repo);
    }
}
