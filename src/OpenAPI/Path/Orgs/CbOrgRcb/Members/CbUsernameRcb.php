<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Members;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CheckMembershipForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CheckMembershipForUserOperation($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveMemberOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\RemoveMemberOperation($org, $username);
    }
}
