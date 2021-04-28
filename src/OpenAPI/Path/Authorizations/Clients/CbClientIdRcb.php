<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Authorizations\Clients;

final class CbClientIdRcb
{
    function put($client_id) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppOperation($client_id);
    }
}
