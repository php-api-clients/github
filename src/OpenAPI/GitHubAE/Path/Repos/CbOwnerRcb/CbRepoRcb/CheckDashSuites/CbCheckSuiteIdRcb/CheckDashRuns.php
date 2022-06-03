<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites\CbCheckSuiteIdRcb;

final class CheckDashRuns
{
    function get($owner, $repo, $check_suite_id, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\ListForSuite($owner, $repo, $check_suite_id, $check_name, $status, $filter, $per_page, $page);
    }
}
