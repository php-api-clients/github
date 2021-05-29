<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Permissions\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization;

final class CbRepositoryIdRcb
{
    function put($org, $repository_id): EnableSelectedRepositoryGithubActionsOrganization
    {
        return new EnableSelectedRepositoryGithubActionsOrganization($org, $repository_id);
    }

    function delete($org, $repository_id): DisableSelectedRepositoryGithubActionsOrganization
    {
        return new DisableSelectedRepositoryGithubActionsOrganization($org, $repository_id);
    }
}
