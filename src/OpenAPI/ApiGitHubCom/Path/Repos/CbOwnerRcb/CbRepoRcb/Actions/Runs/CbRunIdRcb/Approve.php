<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRunOperation;

final class Approve
{
    function post($owner, $repo, $run_id): ApproveWorkflowRunOperation
    {
        return new ApproveWorkflowRunOperation($owner, $repo, $run_id);
    }
}
