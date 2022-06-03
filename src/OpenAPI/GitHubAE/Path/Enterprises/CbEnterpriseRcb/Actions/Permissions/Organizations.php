<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class Organizations
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($enterprise, $per_page, $page);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($enterprise);
    }
}
