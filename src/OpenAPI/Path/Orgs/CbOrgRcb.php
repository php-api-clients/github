<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs;

final class CbOrgRcb
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\GetOperation($org);
    }
    function patch($org) : \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UpdateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Orgs\UpdateOperation($org);
    }
}
