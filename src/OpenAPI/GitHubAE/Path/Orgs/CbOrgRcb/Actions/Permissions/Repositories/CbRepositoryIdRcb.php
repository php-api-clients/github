<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Permissions\Repositories;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganizationOperation;

final class CbRepositoryIdRcb
{
    function put($org, $repository_id): EnableSelectedRepositoryGithubActionsOrganizationOperation
    {
        return new EnableSelectedRepositoryGithubActionsOrganizationOperation($org, $repository_id);
    }

    function delete($org, $repository_id): DisableSelectedRepositoryGithubActionsOrganizationOperation
    {
        return new DisableSelectedRepositoryGithubActionsOrganizationOperation($org, $repository_id);
    }
}
