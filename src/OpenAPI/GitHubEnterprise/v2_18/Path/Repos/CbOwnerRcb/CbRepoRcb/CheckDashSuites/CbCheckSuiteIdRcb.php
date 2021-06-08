<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks\GetSuite;

final class CbCheckSuiteIdRcb
{
    function get($owner, $repo, $check_suite_id): GetSuite
    {
        return new GetSuite($owner, $repo, $check_suite_id);
    }
}
