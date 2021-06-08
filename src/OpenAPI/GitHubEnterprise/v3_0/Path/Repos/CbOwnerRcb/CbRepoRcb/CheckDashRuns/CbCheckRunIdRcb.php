<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Get;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Checks\Update;

final class CbCheckRunIdRcb
{
    function get($owner, $repo, $check_run_id): Get
    {
        return new Get($owner, $repo, $check_run_id);
    }

    function patch($owner, $repo, $check_run_id): Update
    {
        return new Update($owner, $repo, $check_run_id);
    }
}
