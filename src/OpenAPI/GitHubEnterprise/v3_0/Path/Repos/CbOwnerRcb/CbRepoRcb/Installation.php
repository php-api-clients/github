<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetRepoInstallation;

final class Installation
{
    function get($owner, $repo): GetRepoInstallation
    {
        return new GetRepoInstallation($owner, $repo);
    }
}
