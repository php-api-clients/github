<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Path\\Repos\CbOwnerRcb\CbRepoRcb\Code-Scanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\CodeScanning\GetAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\CodeScanning\GetAlertOperation($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\CodeScanning\UpdateAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\CodeScanning\UpdateAlertOperation($owner, $repo, $alert_number);
    }
}
