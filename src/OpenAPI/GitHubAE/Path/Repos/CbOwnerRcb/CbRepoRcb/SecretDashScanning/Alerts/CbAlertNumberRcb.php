<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

final class CbAlertNumberRcb
{
    function get($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\GetAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\GetAlert($owner, $repo, $alert_number);
    }
    function patch($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\UpdateAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\UpdateAlert($owner, $repo, $alert_number);
    }
}
