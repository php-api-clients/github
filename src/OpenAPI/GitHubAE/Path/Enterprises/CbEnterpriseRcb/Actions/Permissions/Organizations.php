<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise;

final class Organizations
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new ListSelectedOrganizationsEnabledGithubActionsEnterprise($enterprise, $per_page, $page);
    }

    function put($enterprise): SetSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new SetSelectedOrganizationsEnabledGithubActionsEnterprise($enterprise);
    }
}
