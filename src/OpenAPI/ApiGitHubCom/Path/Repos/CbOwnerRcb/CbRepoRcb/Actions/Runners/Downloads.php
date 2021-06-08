<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo;

final class Downloads
{
    function get($owner, $repo): ListRunnerApplicationsForRepo
    {
        return new ListRunnerApplicationsForRepo($owner, $repo);
    }
}
