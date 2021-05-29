<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Checks\ListAnnotationsOperation;

final class Annotations
{
    function get($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1): ListAnnotationsOperation
    {
        return new ListAnnotationsOperation($owner, $repo, $check_run_id, $per_page, $page);
    }
}
