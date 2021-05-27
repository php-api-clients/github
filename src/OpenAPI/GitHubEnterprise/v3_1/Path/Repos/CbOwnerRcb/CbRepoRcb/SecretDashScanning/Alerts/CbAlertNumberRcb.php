<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlertOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlertOperation($owner, $repo, $alert_number);
    }
}
