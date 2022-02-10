<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

final class Rerequest
{
    function post($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\RerequestRun($owner, $repo, $check_run_id);
    }
}
