<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Secret-Scanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\GetAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\GetAlertOperation($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\UpdateAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\SecretScanning\UpdateAlertOperation($owner, $repo, $alert_number);
    }
}
