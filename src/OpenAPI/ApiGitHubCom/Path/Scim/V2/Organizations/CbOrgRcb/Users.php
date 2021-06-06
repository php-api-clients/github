<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Scim\V2\Organizations\CbOrgRcb;

final class Users
{
    function get($org, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentities
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentities($org, $startIndex, $count, $filter);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUser($org);
    }
}
