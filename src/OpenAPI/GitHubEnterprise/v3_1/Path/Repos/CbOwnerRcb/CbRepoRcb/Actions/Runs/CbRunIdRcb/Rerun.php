<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ReRunWorkflow;

final class Rerun
{
    function post($owner, $repo, $run_id): ReRunWorkflow
    {
        return new ReRunWorkflow($owner, $repo, $run_id);
    }
}
