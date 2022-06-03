<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

final class Logs
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DownloadJobLogsForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DownloadJobLogsForWorkflowRun($owner, $repo, $job_id);
    }
}
