<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts\CbAlertNumberRcb;

final class Locations
{
    function get($owner, $repo, $alert_number, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListLocationsForAlert
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListLocationsForAlert($owner, $repo, $alert_number, $page, $per_page);
    }
}
