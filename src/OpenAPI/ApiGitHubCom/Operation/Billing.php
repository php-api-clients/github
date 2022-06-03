<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Billing
{
    public function getGithubActionsBillingGhe_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGhe_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingGhe_($enterprise);
    }
    public function getGithubAdvancedSecurityBillingGhe_($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingGhe_($enterprise, $per_page, $page);
    }
    public function getGithubPackagesBillingGhe_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingGhe_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingGhe_($enterprise);
    }
    public function getSharedStorageBillingGhe_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGhe_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingGhe_($enterprise);
    }
    public function getGithubActionsBillingOrg_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrg_($org);
    }
    public function getGithubAdvancedSecurityBillingOrg_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubAdvancedSecurityBillingOrg_($org, $per_page, $page);
    }
    public function getGithubPackagesBillingOrg_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrg_($org);
    }
    public function getSharedStorageBillingOrg_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingOrg_($org);
    }
    public function getGithubActionsBillingUser_($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingUser_($username);
    }
    public function getGithubPackagesBillingUser_($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingUser_($username);
    }
    public function getSharedStorageBillingUser_($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetSharedStorageBillingUser_($username);
    }
}
