<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRunOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRunOperation;

final class PendingDeployments
{
    function get($owner, $repo, $run_id): GetPendingDeploymentsForRunOperation
    {
        return new GetPendingDeploymentsForRunOperation($owner, $repo, $run_id);
    }

    function post($owner, $repo, $run_id): ReviewPendingDeploymentsForRunOperation
    {
        return new ReviewPendingDeploymentsForRunOperation($owner, $repo, $run_id);
    }
}
