<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprises\CbEnterpriseRcb\Actions\Permissions\Organizations;

final class CbOrgIdRcb
{
    function put($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($enterprise, $org_id);
    }
    function delete($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($enterprise, $org_id);
    }
}
