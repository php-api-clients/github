<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\GetAlertOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodeScanning\UpdateAlertOperation;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number): GetAlertOperation
    {
        return new GetAlertOperation($owner, $repo, $alert_number);
    }

    function patch($owner, $repo, $alert_number): UpdateAlertOperation
    {
        return new UpdateAlertOperation($owner, $repo, $alert_number);
    }
}
