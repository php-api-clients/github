<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($client_id, $fingerprint);
    }
}
