<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Runners;

final class RegistrationToken
{
    function post($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRegistrationTokenForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\CreateRegistrationTokenForOrgOperation($org);
    }
}
