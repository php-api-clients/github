<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }
    function delete($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }
}
