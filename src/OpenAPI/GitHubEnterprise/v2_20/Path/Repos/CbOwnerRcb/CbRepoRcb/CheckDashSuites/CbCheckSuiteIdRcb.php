<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites;

final class CbCheckSuiteIdRcb
{
    function get($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\GetSuiteOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Checks\GetSuiteOperation($owner, $repo, $check_suite_id);
    }
}
