<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\CreateSuite;

final class CheckSuites
{
    function post($owner, $repo): CreateSuite
    {
        return new CreateSuite($owner, $repo);
    }
}
