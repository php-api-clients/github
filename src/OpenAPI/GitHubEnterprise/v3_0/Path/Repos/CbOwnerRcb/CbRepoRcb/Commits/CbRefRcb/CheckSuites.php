<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class CheckSuites
{
    function get($owner, $repo, $ref, $app_id, $check_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\ListSuitesForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\ListSuitesForRef($owner, $repo, $ref, $app_id, $check_name, $per_page, $page);
    }
}
