<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

final class Rerequest
{
    function post($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\RerequestSuite($owner, $repo, $check_suite_id);
    }
}
