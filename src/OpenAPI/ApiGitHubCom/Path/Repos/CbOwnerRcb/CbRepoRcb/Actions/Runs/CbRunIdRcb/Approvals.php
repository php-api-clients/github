<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRunOperation;

final class Approvals
{
    function get($owner, $repo, $run_id): GetReviewsForRunOperation
    {
        return new GetReviewsForRunOperation($owner, $repo, $run_id);
    }
}
