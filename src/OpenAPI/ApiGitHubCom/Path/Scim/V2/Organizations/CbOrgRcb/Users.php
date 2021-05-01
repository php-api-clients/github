<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Scim\V2\Organizations\CbOrgRcb;

final class Users
{
    function get($org, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentitiesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ListProvisionedIdentitiesOperation($org, $startIndex, $count, $filter);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim\ProvisionAndInviteUserOperation($org);
    }
}
