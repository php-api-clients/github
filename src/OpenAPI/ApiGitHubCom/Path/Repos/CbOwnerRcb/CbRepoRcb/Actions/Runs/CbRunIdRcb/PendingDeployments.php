<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun;

final class PendingDeployments
{
    function get($owner, $repo, $run_id): GetPendingDeploymentsForRun
    {
        return new GetPendingDeploymentsForRun($owner, $repo, $run_id);
    }

    function post($owner, $repo, $run_id): ReviewPendingDeploymentsForRun
    {
        return new ReviewPendingDeploymentsForRun($owner, $repo, $run_id);
    }
}
