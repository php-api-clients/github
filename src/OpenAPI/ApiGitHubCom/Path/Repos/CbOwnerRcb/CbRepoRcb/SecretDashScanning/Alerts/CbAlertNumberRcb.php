<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert;

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
