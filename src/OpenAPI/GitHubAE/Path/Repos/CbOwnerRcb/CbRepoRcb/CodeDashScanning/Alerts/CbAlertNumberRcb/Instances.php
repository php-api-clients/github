<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\ListAlertInstancesOperation;

final class Instances
{
    function get($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref): ListAlertInstancesOperation
    {
        return new ListAlertInstancesOperation($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
}
