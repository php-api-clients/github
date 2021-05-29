<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetRepoInstallation;

final class Installation
{
    function get($owner, $repo): GetRepoInstallation
    {
        return new GetRepoInstallation($owner, $repo);
    }
}
