<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns\CbCheckRunIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Checks\ListAnnotations;

final class Annotations
{
    function get($owner, $repo, $check_run_id, int $per_page = 30, int $page = 1): ListAnnotations
    {
        return new ListAnnotations($owner, $repo, $check_run_id, $per_page, $page);
    }
}
