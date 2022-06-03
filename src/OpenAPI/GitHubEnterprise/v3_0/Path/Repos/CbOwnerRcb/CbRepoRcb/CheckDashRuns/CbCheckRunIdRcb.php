<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns;

final class CbCheckRunIdRcb
{
    function get($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Get($owner, $repo, $check_run_id);
    }
    function patch($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Update($owner, $repo, $check_run_id);
    }
}
