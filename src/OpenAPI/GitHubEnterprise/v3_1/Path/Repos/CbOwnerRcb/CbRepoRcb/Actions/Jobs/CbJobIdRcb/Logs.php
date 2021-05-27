<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

final class Logs
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
