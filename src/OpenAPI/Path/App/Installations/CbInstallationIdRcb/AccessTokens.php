<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\App\Installations\CbInstallationIdRcb;

final class AccessTokens
{
    function post($installation_id) : \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateInstallationAccessTokenOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Apps\CreateInstallationAccessTokenOperation($installation_id);
    }
}
