<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\\Repos\CbOwnerRcb\CbRepoRcb\Check-Suites\CbCheckSuiteIdRcb;

final class Rerequest
{
    function post($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Checks\RerequestSuiteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Checks\RerequestSuiteOperation($owner, $repo, $check_suite_id);
    }
}