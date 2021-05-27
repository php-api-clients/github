<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class Logs
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogsOperation($owner, $repo, $run_id);
    }
    function delete($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogsOperation($owner, $repo, $run_id);
    }
}
