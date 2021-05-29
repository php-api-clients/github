<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\GetAlert;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UpdateAlert;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number): GetAlert
    {
        return new GetAlert($owner, $repo, $alert_number);
    }

    function patch($owner, $repo, $alert_number): UpdateAlert
    {
        return new UpdateAlert($owner, $repo, $alert_number);
    }
}
