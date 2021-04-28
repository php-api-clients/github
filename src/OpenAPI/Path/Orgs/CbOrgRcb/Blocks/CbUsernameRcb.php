<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Blocks;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CheckBlockedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\CheckBlockedUserOperation($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\BlockUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\BlockUserOperation($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UnblockUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UnblockUserOperation($org, $username);
    }
}
