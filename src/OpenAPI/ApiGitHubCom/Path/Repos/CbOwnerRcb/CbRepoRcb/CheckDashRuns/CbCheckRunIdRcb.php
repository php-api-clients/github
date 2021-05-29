<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CheckDashRuns;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\GetOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Checks\UpdateOperation;

final class CbCheckRunIdRcb
{
    function get($owner, $repo, $check_run_id): GetOperation
    {
        return new GetOperation($owner, $repo, $check_run_id);
    }

    function patch($owner, $repo, $check_run_id): UpdateOperation
    {
        return new UpdateOperation($owner, $repo, $check_run_id);
    }
}
