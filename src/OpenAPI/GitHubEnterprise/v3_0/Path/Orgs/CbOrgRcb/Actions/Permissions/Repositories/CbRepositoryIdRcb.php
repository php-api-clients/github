<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Permissions\Repositories;

final class CbRepositoryIdRcb
{
    function put($org, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization($org, $repository_id);
    }
    function delete($org, $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization($org, $repository_id);
    }
}
