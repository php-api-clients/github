<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\SecretScanning;

final class Alerts
{
    function get($enterprise, $state, $secret_type, $resolution, int $per_page = 30, $before, $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise($enterprise, $state, $secret_type, $resolution, $per_page, $before, $after);
    }
}
