<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }
    function delete($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterpriseOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterpriseOperation($enterprise, $org_id);
    }
}
