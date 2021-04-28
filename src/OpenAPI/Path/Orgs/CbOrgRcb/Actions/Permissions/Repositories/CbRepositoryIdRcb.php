<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Permissions\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $repository_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganizationOperation($org, $repository_id);
    }
    function delete($org, $repository_id) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganizationOperation($org, $repository_id);
    }
}
