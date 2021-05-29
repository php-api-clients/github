<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterpriseOperation;

final class Organizations
{
    function get($enterprise, int $per_page = 30, int $page = 1): ListSelectedOrganizationsEnabledGithubActionsEnterpriseOperation
    {
        return new ListSelectedOrganizationsEnabledGithubActionsEnterpriseOperation($enterprise, $per_page, $page);
    }

    function put($enterprise): SetSelectedOrganizationsEnabledGithubActionsEnterpriseOperation
    {
        return new SetSelectedOrganizationsEnabledGithubActionsEnterpriseOperation($enterprise);
    }
}
