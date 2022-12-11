<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\CustomRoles;

final class CbRoleIdRcb
{
    function get($org, $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole($org, $role_id);
    }
    function delete($org, $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole($org, $role_id);
    }
    function patch($org, $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole($org, $role_id);
    }
}
