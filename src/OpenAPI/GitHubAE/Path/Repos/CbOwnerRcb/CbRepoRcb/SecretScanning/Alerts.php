<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

final class Alerts
{
    function get($owner, $repo, $state, $secret_type, $resolution, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForRepo($owner, $repo, $state, $secret_type, $resolution, $page, $per_page);
    }
}