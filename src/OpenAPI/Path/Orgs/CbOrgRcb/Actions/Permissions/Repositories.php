<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Permissions;

final class Repositories
{
    function get($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganizationOperation($org, $per_page, $page);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganizationOperation($org);
    }
}
