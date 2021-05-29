<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetRepoInstallationOperation;

final class Installation
{
    function get($owner, $repo): GetRepoInstallationOperation
    {
        return new GetRepoInstallationOperation($owner, $repo);
    }
}
