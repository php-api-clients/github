<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\ActionsPolicies\GetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\ActionsPolicies\GetGithubActionsPermissionsOrganizationOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation($org);
    }
}