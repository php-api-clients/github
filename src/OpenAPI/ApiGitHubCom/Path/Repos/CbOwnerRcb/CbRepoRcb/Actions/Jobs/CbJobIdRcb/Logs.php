<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

final class Logs
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun($owner, $repo, $job_id);
    }
}
