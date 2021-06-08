<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Orgs\CbOrgRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization;

final class Repositories
{
    function get($org, int $per_page = 30, int $page = 1): ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new ListSelectedRepositoriesEnabledGithubActionsOrganization($org, $per_page, $page);
    }

    function put($org): SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new SetSelectedRepositoriesEnabledGithubActionsOrganization($org);
    }
}
