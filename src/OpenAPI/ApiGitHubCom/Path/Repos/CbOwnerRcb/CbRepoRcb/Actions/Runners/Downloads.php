<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepoOperation;

final class Downloads
{
    function get($owner, $repo): ListRunnerApplicationsForRepoOperation
    {
        return new ListRunnerApplicationsForRepoOperation($owner, $repo);
    }
}
