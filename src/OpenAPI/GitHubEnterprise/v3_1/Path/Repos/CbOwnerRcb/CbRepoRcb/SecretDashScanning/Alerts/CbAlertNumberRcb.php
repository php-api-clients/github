<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlert;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number): GetAlert
    {
        return new GetAlert($owner, $repo, $alert_number);
    }
}
