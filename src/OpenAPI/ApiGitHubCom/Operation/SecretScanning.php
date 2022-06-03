<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class SecretScanning
{
    public function listAlertsForEnterprise_($enterprise, $state, $secret_type, $resolution, int $per_page = 30, $before, $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise_($enterprise, $state, $secret_type, $resolution, $per_page, $before, $after);
    }
    public function listAlertsForOrg_($org, $state, $secret_type, $resolution, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg_($org, $state, $secret_type, $resolution, $page, $per_page);
    }
    public function listAlertsForRepo_($owner, $repo, $state, $secret_type, $resolution, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo_($owner, $repo, $state, $secret_type, $resolution, $page, $per_page);
    }
    public function getAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_($owner, $repo, $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
    public function listLocationsForAlert_($owner, $repo, $alert_number, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert_($owner, $repo, $alert_number, $page, $per_page);
    }
}
