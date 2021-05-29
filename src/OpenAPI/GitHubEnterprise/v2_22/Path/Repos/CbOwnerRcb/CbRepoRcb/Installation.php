<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetRepoInstallation;

final class Installation
{
    function get($owner, $repo): GetRepoInstallation
    {
        return new GetRepoInstallation($owner, $repo);
    }
}
