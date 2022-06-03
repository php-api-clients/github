<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Commits\CbRefRcb;

final class CheckRuns
{
    function get($owner, $repo, $ref, $check_name, $status, string $filter = 'latest', int $per_page = 30, int $page = 1, $app_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Checks\ListForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Checks\ListForRef($owner, $repo, $ref, $check_name, $status, $filter, $per_page, $page, $app_id);
    }
}
