<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\GetSuiteOperation;

final class CbCheckSuiteIdRcb
{
    function get($owner, $repo, $check_suite_id): GetSuiteOperation
    {
        return new GetSuiteOperation($owner, $repo, $check_suite_id);
    }
}
