<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Logs
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs($owner, $repo, $run_id);
    }
    function delete($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs($owner, $repo, $run_id);
    }
}
