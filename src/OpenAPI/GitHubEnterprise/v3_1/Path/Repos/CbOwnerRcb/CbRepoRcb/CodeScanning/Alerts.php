<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\ListAlertsForRepoOperation;

final class Alerts
{
    function get($owner, $repo, $tool_name, $tool_guid, int $page = 1, int $per_page = 30, $ref, $state): ListAlertsForRepoOperation
    {
        return new ListAlertsForRepoOperation($owner, $repo, $tool_name, $tool_guid, $page, $per_page, $ref, $state);
    }
}
