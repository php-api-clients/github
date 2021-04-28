<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation($client_id, $fingerprint);
    }
}
