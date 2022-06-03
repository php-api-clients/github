<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

final class Rerequest
{
    function post($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestRun
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestRun($owner, $repo, $check_run_id);
    }
}
