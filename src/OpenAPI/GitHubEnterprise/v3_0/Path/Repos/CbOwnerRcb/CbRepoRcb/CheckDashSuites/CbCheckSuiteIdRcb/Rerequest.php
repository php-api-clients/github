<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\RerequestSuiteOperation;

final class Rerequest
{
    function post($owner, $repo, $check_suite_id): RerequestSuiteOperation
    {
        return new RerequestSuiteOperation($owner, $repo, $check_suite_id);
    }
}
