<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Actions\Secrets;

final class PublicKey
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetOrgPublicKeyOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\GetOrgPublicKeyOperation($org);
    }
}
