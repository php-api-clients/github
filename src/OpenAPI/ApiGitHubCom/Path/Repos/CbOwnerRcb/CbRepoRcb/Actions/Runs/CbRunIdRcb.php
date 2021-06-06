<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs;

final class CbRunIdRcb
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun($owner, $repo, $run_id);
    }
    function delete($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun($owner, $repo, $run_id);
    }
}
