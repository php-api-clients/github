<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class SecretScanning
{
    public function listAlertsForRepo_(string $owner, string $repo, string $state, string $secret_type, string $resolution, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\ListAlertsForRepo_($owner, $repo, $state, $secret_type, $resolution, $page, $per_page);
    }
    public function getAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\GetAlert_($owner, $repo, $alert_number);
    }
    public function updateAlert_(string $owner, string $repo, int $alert_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\UpdateAlert_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning\UpdateAlert_($owner, $repo, $alert_number);
    }
}
