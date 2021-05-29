<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepo;

final class Alerts
{
    function get($owner, $repo, $state, int $page = 1, int $per_page = 30): ListAlertsForRepo
    {
        return new ListAlertsForRepo($owner, $repo, $state, $page, $per_page);
    }
}
