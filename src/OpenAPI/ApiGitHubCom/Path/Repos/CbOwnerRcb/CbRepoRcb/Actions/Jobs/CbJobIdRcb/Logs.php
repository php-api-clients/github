<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun;

final class Logs
{
    function get($owner, $repo, $job_id): DownloadJobLogsForWorkflowRun
    {
        return new DownloadJobLogsForWorkflowRun($owner, $repo, $job_id);
    }
}
