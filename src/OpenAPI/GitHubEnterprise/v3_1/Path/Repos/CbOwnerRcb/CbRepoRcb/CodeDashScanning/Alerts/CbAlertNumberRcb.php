<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\GetAlertOperation($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UpdateAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\CodeScanning\UpdateAlertOperation($owner, $repo, $alert_number);
    }
}
