<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($client_id, $fingerprint);
    }
}
