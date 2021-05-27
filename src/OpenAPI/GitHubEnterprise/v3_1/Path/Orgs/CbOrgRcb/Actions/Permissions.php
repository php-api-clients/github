<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganizationOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation($org);
    }
}
