<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Jobs\CbJobIdRcb;

final class Logs
{
    function get($owner, $repo, $job_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DownloadJobLogsForWorkflowRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DownloadJobLogsForWorkflowRunOperation($owner, $repo, $job_id);
    }
}
