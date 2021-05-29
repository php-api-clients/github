<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlertOperation;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number): GetAlertOperation
    {
        return new GetAlertOperation($owner, $repo, $alert_number);
    }
}
