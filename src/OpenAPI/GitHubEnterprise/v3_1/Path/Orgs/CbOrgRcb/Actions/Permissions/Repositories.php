<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganizationOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganizationOperation;

final class Repositories
{
    function get($org, int $per_page = 30, int $page = 1): ListSelectedRepositoriesEnabledGithubActionsOrganizationOperation
    {
        return new ListSelectedRepositoriesEnabledGithubActionsOrganizationOperation($org, $per_page, $page);
    }

    function put($org): SetSelectedRepositoriesEnabledGithubActionsOrganizationOperation
    {
        return new SetSelectedRepositoriesEnabledGithubActionsOrganizationOperation($org);
    }
}
