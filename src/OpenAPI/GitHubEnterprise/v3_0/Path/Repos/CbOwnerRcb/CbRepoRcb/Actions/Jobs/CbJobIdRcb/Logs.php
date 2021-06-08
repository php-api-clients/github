<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DownloadJobLogsForWorkflowRun;

final class Logs
{
    function get($owner, $repo, $job_id): DownloadJobLogsForWorkflowRun
    {
        return new DownloadJobLogsForWorkflowRun($owner, $repo, $job_id);
    }
}
