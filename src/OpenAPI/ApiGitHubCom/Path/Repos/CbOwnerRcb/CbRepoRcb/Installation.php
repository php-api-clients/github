<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallationOperation;

final class Installation
{
    function get($owner, $repo): GetRepoInstallationOperation
    {
        return new GetRepoInstallationOperation($owner, $repo);
    }
}
