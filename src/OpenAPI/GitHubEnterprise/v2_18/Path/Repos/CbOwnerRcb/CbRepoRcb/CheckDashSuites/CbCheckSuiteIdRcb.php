<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashSuites;

final class CbCheckSuiteIdRcb
{
    function get($owner, $repo, $check_suite_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks\GetSuite
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks\GetSuite($owner, $repo, $check_suite_id);
    }
}
