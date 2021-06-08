<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts\CbAlertNumberRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\ListAlertInstances;

final class Instances
{
    function get($owner, $repo, $alert_number, int $page = 1, int $per_page = 30, $ref): ListAlertInstances
    {
        return new ListAlertInstances($owner, $repo, $alert_number, $page, $per_page, $ref);
    }
}
