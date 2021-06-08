<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertsForRepo;

final class Alerts
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $state): ListAlertsForRepo
    {
        return new ListAlertsForRepo($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
}
