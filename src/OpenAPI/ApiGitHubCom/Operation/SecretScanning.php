<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class SecretScanning
{
    public function listAlertsForEnterprise_(string $enterprise, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForEnterprise_($enterprise, $state, $secret_type, $resolution, $sort, $direction, $per_page, $before, $after);
    }
    public function listAlertsForOrg_(string $org, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForOrg_($org, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
    public function listAlertsForRepo_(string $owner, string $repo, string $state, string $secret_type, string $resolution, string $sort = 'created', string $direction = 'desc', int $page = 1, int $per_page = 30, string $before, string $after) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListAlertsForRepo_($owner, $repo, $state, $secret_type, $resolution, $sort, $direction, $page, $per_page, $before, $after);
    }
    public function getAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
    public function listLocationsForAlert_(string $owner, string $repo, int $alert_number, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\SecretScanning\ListLocationsForAlert_($owner, $repo, $alert_number, $page, $per_page);
    }
}
