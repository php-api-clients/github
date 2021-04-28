<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions;

final class Permissions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ActionsPolicies\GetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ActionsPolicies\GetGithubActionsPermissionsOrganizationOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\SetGithubActionsPermissionsOrganizationOperation($org);
    }
}
