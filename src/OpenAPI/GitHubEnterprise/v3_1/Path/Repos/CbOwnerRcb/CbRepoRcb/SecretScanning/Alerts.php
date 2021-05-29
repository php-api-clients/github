<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepoOperation;

final class Alerts
{
    function get($owner, $repo, $state, int $page = 1, int $per_page = 30): ListAlertsForRepoOperation
    {
        return new ListAlertsForRepoOperation($owner, $repo, $state, $page, $per_page);
    }
}
