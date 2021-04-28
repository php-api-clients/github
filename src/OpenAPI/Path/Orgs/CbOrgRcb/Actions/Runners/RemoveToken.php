<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runners;

final class RemoveToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRemoveTokenForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRemoveTokenForOrgOperation($org);
    }
}
