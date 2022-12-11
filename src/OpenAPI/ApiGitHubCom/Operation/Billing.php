<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Billing
{
    public function getGithubAdvancedSecurityBillingGhe_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe_($enterprise, $per_page, $page);
    }
    public function getGithubActionsBillingOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg_($org);
    }
    public function getGithubAdvancedSecurityBillingOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg_($org, $per_page, $page);
    }
    public function getGithubPackagesBillingOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg_($org);
    }
    public function getSharedStorageBillingOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg_($org);
    }
    public function getGithubActionsBillingUser_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser_($username);
    }
    public function getGithubPackagesBillingUser_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser_($username);
    }
    public function getSharedStorageBillingUser_(string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser_($username);
    }
}
