<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

final class Annotations
{
    function get($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\ListAnnotations($owner, $repo, $check_run_id, $per_page, $page);
    }
}
