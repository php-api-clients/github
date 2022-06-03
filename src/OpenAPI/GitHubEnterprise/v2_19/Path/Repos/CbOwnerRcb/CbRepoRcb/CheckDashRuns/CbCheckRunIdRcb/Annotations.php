<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

final class Annotations
{
    function get($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Checks\ListAnnotations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Checks\ListAnnotations($owner, $repo, $check_run_id, $per_page, $page);
    }
}
