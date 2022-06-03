<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($client_id, $fingerprint);
    }
}
