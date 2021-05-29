<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CancelWorkflowRunOperation;

final class Cancel
{
    function post($owner, $repo, $run_id): CancelWorkflowRunOperation
    {
        return new CancelWorkflowRunOperation($owner, $repo, $run_id);
    }
}
