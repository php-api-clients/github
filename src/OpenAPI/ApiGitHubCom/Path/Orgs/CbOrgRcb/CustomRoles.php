<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class CustomRoles
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole($org);
    }
}
