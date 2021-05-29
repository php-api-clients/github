<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForRepo;

final class Downloads
{
    function get($owner, $repo): ListRunnerApplicationsForRepo
    {
        return new ListRunnerApplicationsForRepo($owner, $repo);
    }
}
