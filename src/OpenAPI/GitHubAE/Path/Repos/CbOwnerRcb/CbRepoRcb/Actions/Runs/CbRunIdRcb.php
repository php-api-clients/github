<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun;

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
