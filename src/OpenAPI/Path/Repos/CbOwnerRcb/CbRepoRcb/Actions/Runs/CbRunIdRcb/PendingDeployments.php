<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runs\CbRunIdRcb;

final class PendingDeployments
{
    function get($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetPendingDeploymentsForRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetPendingDeploymentsForRunOperation($owner, $repo, $run_id);
    }
    function post($owner, $repo, $run_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ReviewPendingDeploymentsForRunOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ReviewPendingDeploymentsForRunOperation($owner, $repo, $run_id);
    }
}
