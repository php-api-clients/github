<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage;

final class Timing
{
    function get($owner, $repo, $run_id): GetWorkflowRunUsage
    {
        return new GetWorkflowRunUsage($owner, $repo, $run_id);
    }
}
