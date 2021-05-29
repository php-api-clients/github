<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs;

final class Logs
{
    function get($owner, $repo, $run_id): DownloadWorkflowRunLogs
    {
        return new DownloadWorkflowRunLogs($owner, $repo, $run_id);
    }

    function delete($owner, $repo, $run_id): DeleteWorkflowRunLogs
    {
        return new DeleteWorkflowRunLogs($owner, $repo, $run_id);
    }
}
