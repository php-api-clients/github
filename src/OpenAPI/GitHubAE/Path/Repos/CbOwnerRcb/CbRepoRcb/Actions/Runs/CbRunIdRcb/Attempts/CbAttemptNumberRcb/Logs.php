<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb\Attempts\CbAttemptNumberRcb;

final class Logs
{
    function get($owner, $repo, $run_id, $attempt_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunAttemptLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunAttemptLogs($owner, $repo, $run_id, $attempt_number);
    }
}
