<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class Blocks
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListBlockedUsersOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\ListBlockedUsersOperation($org);
    }
}
