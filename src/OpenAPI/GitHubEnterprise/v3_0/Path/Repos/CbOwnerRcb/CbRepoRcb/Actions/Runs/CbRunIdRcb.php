<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DeleteWorkflowRunOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetWorkflowRunOperation;

final class CbRunIdRcb
{
    function get($owner, $repo, $run_id): GetWorkflowRunOperation
    {
        return new GetWorkflowRunOperation($owner, $repo, $run_id);
    }

    function delete($owner, $repo, $run_id): DeleteWorkflowRunOperation
    {
        return new DeleteWorkflowRunOperation($owner, $repo, $run_id);
    }
}
