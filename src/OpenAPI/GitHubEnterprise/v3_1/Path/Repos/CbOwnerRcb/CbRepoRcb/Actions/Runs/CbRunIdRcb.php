<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRun;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflowRun;

final class CbRunIdRcb
{
    function get($owner, $repo, $run_id): GetWorkflowRun
    {
        return new GetWorkflowRun($owner, $repo, $run_id);
    }

    function delete($owner, $repo, $run_id): DeleteWorkflowRun
    {
        return new DeleteWorkflowRun($owner, $repo, $run_id);
    }
}
