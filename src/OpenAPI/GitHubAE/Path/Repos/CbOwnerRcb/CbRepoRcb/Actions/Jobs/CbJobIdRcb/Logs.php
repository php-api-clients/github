<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadJobLogsForWorkflowRunOperation;

final class Logs
{
    function get($owner, $repo, $job_id): DownloadJobLogsForWorkflowRunOperation
    {
        return new DownloadJobLogsForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
