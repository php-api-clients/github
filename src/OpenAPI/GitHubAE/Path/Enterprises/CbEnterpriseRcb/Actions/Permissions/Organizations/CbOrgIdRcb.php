<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise;
use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise;

final class CbOrgIdRcb
{
    function put($enterprise, $org_id): EnableSelectedOrganizationGithubActionsEnterprise
    {
        return new EnableSelectedOrganizationGithubActionsEnterprise($enterprise, $org_id);
    }

    function delete($enterprise, $org_id): DisableSelectedOrganizationGithubActionsEnterprise
    {
        return new DisableSelectedOrganizationGithubActionsEnterprise($enterprise, $org_id);
    }
}
