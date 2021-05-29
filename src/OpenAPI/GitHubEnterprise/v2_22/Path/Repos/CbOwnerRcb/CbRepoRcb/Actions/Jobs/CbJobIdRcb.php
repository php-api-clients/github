<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Actions\GetJobForWorkflowRun;

final class CbJobIdRcb
{
    function get($owner, $repo, $job_id): GetJobForWorkflowRun
    {
        return new GetJobForWorkflowRun($owner, $repo, $job_id);
    }
}
