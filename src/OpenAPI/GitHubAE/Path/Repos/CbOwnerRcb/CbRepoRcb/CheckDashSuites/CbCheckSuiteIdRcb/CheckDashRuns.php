<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForSuiteOperation;

final class CheckDashRuns
{
    function get($owner, $repo, $check_suite_id, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1): ListForSuiteOperation
    {
        return new ListForSuiteOperation($owner, $repo, $check_suite_id, $check_name, $status, $filter, $per_page, $page);
    }
}
