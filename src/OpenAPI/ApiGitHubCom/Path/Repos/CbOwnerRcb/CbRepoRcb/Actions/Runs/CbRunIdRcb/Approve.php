<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun;

final class Approve
{
    function post($owner, $repo, $run_id): ApproveWorkflowRun
    {
        return new ApproveWorkflowRun($owner, $repo, $run_id);
    }
}
