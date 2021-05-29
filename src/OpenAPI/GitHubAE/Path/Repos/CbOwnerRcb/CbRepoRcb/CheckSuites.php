<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\CreateSuiteOperation;

final class CheckSuites
{
    function post($owner, $repo): CreateSuiteOperation
    {
        return new CreateSuiteOperation($owner, $repo);
    }
}
