<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\SecretScanning;

final class Alerts
{
    function get($enterprise, $state, $secret_type, $resolution, string $sort = 'created', string $direction = 'desc', int $per_page = 30, $before, $after) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\SecretScanning\ListAlertsForEnterprise($enterprise, $state, $secret_type, $resolution, $sort, $direction, $per_page, $before, $after);
    }
}
