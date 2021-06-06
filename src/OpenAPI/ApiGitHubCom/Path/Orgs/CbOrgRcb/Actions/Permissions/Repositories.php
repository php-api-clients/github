<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Actions\Permissions;

final class Repositories
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($org, $per_page, $page);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($org);
    }
}
