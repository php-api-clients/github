<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetJobForWorkflowRunOperation;

final class CbJobIdRcb
{
    function get($owner, $repo, $job_id): GetJobForWorkflowRunOperation
    {
        return new GetJobForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
