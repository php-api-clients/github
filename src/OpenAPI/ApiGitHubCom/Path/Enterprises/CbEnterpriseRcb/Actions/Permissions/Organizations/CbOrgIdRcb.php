<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterpriseOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterpriseOperation;

final class CbOrgIdRcb
{
    function put($enterprise, $org_id): EnableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new EnableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }

    function delete($enterprise, $org_id): DisableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new DisableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }
}
