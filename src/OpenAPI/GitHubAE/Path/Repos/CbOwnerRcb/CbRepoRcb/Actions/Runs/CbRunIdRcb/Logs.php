<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogsOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogsOperation;

final class Logs
{
    function get($owner, $repo, $run_id): DownloadWorkflowRunLogsOperation
    {
        return new DownloadWorkflowRunLogsOperation($owner, $repo, $run_id);
    }

    function delete($owner, $repo, $run_id): DeleteWorkflowRunLogsOperation
    {
        return new DeleteWorkflowRunLogsOperation($owner, $repo, $run_id);
    }
}
