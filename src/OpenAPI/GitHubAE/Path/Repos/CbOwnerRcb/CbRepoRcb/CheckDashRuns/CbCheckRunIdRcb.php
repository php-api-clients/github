<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns;

final class CbCheckRunIdRcb
{
    function get($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Get($owner, $repo, $check_run_id);
    }
    function patch($owner, $repo, $check_run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Checks\Update($owner, $repo, $check_run_id);
    }
}
