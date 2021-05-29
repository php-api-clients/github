<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogs;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogs;

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
