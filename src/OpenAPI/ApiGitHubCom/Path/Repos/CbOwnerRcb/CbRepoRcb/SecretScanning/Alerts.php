<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo;

final class Alerts
{
    function get($owner, $repo, $state, int $page = 1, int $per_page = 30): ListAlertsForRepo
    {
        return new ListAlertsForRepo($owner, $repo, $state, $page, $per_page);
    }
}
