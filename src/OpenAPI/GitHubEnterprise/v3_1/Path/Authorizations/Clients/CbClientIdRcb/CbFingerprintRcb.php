<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Authorizations\Clients\CbClientIdRcb;

final class CbFingerprintRcb
{
    function put($client_id, $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint($client_id, $fingerprint);
    }
}
