<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\ReRunWorkflowOperation;

final class Rerun
{
    function post($owner, $repo, $run_id): ReRunWorkflowOperation
    {
        return new ReRunWorkflowOperation($owner, $repo, $run_id);
    }
}
