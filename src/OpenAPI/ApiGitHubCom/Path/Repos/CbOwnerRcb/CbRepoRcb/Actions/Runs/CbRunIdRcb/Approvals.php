<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun;

final class Approvals
{
    function get($owner, $repo, $run_id): GetReviewsForRun
    {
        return new GetReviewsForRun($owner, $repo, $run_id);
    }
}
