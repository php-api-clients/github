<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeDashScanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\GetAlert($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\CodeScanning\UpdateAlert($owner, $repo, $alert_number);
    }
}
