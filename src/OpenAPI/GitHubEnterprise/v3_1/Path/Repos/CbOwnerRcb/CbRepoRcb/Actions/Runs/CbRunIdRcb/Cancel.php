<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CancelWorkflowRun;

final class Cancel
{
    function post($owner, $repo, $run_id): CancelWorkflowRun
    {
        return new CancelWorkflowRun($owner, $repo, $run_id);
    }
}
