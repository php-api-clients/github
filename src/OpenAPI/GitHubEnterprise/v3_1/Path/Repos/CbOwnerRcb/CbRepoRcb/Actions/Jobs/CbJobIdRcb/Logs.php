<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRunOperation;

final class Logs
{
    function get($owner, $repo, $job_id): DownloadJobLogsForWorkflowRunOperation
    {
        return new DownloadJobLogsForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
