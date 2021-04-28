<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Scim\V2\Organizations\CbOrgRcb;

final class Users
{
    function get($org, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\Operation\Scim\ListProvisionedIdentitiesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Scim\ListProvisionedIdentitiesOperation($org, $startIndex, $count, $filter);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Scim\ProvisionAndInviteUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Scim\ProvisionAndInviteUserOperation($org);
    }
}
