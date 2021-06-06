<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class PendingDeployments
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun($owner, $repo, $run_id);
    }
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun($owner, $repo, $run_id);
    }
}
