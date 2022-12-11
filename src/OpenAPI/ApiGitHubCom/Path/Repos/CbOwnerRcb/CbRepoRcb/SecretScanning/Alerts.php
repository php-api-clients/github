<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\SecretScanning;

final class Alerts
{
    function get($owner, $repo, $state, $secret_type, $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, $before, $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo($owner, $repo, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
}
