<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprintOperation($client_id, $fingerprint);
    }
}
