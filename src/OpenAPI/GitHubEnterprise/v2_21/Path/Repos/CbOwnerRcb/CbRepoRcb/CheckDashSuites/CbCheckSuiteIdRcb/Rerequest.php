<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Checks\RerequestSuite;

final class Rerequest
{
    function post($owner, $repo, $check_suite_id): RerequestSuite
    {
        return new RerequestSuite($owner, $repo, $check_suite_id);
    }
}
