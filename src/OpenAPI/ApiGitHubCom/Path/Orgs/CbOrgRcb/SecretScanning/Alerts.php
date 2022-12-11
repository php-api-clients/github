<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\SecretScanning;

final class Alerts
{
    function get($org, $state, $secret_type, $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, $before, $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg($org, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
}
