<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

final class Organizations
{
    function get($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterpriseOperation($enterprise, $per_page, $page);
    }
    function put($enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterpriseOperation($enterprise);
    }
}
